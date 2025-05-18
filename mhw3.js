let auth0 = null;

async function configureAuth0() {
    try {
        auth0 = await createAuth0Client({
            domain: "dev-glyooisocuw35gd0.eu.auth0.co",
            client_id: "XXXXXXXXXXXXXX",
            cacheLocation: 'localstorage',
            useRefreshTokens: true
        });
        console.log("Auth0 configurato correttamente");
    } catch (error) {
        console.error("Errore nella configurazione di Auth0", error);
    }
}

window.addEventListener("load", async () => {
    await configureAuth0();

    if (auth0) {
        const isAuthenticated = await auth0.isAuthenticated();
        console.log("Autenticato:", isAuthenticated);

        if (isAuthenticated) {
            const user = await auth0.getUser();
            console.log("Utente loggato:", user);
            const modal = document.getElementById('formModal');
            if (modal) {
                modal.classList.remove('active');
                document.body.classList.remove('no-scroll');
            }
        }
    }
});

function onClick(event) {
    const question = event.currentTarget;
    const answer = question.nextElementSibling;
    const symbol = question.querySelector(".plus-symbol");

    if (answer && symbol) {
        if (answer.classList.contains("hidden")) {
            answer.classList.remove("hidden");
            symbol.classList.add("rotate");
        } else {
            answer.classList.add("hidden");
            symbol.classList.remove("rotate");
        }
    }
}

const questions = document.querySelectorAll('.faq-question');
questions.forEach(question => {
    question.addEventListener('click', onClick);
});

const formTrigger = document.getElementById('formTrigger');
const modal = document.getElementById('formModal');
const closeModal = document.getElementById('closeModal');

if (formTrigger && modal && closeModal) {
    formTrigger.addEventListener('click', function (e) {
        e.preventDefault();
        modal.classList.add('active');
        document.body.classList.add('no-scroll');
    });

    closeModal.addEventListener('click', function () {
        modal.classList.remove('active');
        document.body.classList.remove('no-scroll');
    });

    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
    });
}

const loginForm = document.querySelector('#formModal form');

if (loginForm) {
    loginForm.addEventListener('submit', async function (e) {
        e.preventDefault();
        const email = document.getElementById('email').value;

        if (!auth0) {
            console.error("Auth0 non inizializzato.");
            return;
        }

        try {
            await auth0.loginWithRedirect({
                redirect_uri: "http://127.0.0.1:5500/mhw3.html",
                authorizationParams: {
                    login_hint: email
                }
            });
        } catch (err) {
            console.error("Errore di login", err);
            alert("Login fallito");
        }
    });
}

window.addEventListener('load', async () => {
    const query = window.location.search;
    if (query.includes('code=') && query.includes('state=')) {
        await auth0.handleRedirectCallback();
        window.history.replaceState({}, document.title, "/");
    }
});

let token;

function onJson(json) {
    const library = document.querySelector('#album-view');
    library.innerHTML = '';
    const results = json.albums.items;
    let num_results = results.length;
    if (num_results > 5) num_results = 5;
    for (let i = 0; i < num_results; i++) {
        const album_data = results[i];
        const title = album_data.name;
        const selected_image = album_data.images[0].url;
        const album = document.createElement('div');
        album.classList.add('album');
        const img = document.createElement('img');
        img.src = selected_image;
        const caption = document.createElement('span');
        caption.textContent = title;
        album.appendChild(img);
        album.appendChild(caption);
        library.appendChild(album);
    }
    document.getElementById('albumModal').classList.add('active');
    document.body.classList.add('no-scroll');
}

function onResponse(response) {
    return response.json();
}

function search(event) {
    event.preventDefault();
    const album_input = document.querySelector('#album');
    const album_value = encodeURIComponent(album_input.value);
    fetch("https://api.spotify.com/v1/search?type=album&q=" + album_value, {
        headers: { 'Authorization': 'Bearer ' + token }
    }).then(onResponse).then(onJson);
}

function onTokenJson(json) {
    token = json.access_token;
}

function onTokenResponse(response) {
    return response.json();
}

fetch("https://accounts.spotify.com/api/token", {
    method: "post",
    body: 'grant_type=client_credentials',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Authorization': 'Basic ' + btoa('3485aa752ff445dbbc51a583d527cc15:13760cd9195b445a846d5e859abf70fd')
    }
}).then(onTokenResponse).then(onTokenJson);

document.querySelector('#spotify-form').addEventListener('submit', search);

document.getElementById('openAlbumModal').addEventListener('click', () => {
    document.getElementById('albumModal').classList.add('active');
    document.body.classList.add('no-scroll');
});

document.getElementById('closeAlbumModal').addEventListener('click', () => {
    document.getElementById('albumModal').classList.remove('active');
    document.body.classList.remove('no-scroll');
});

document.getElementById('albumModal').addEventListener('click', (e) => {
    if (e.target === document.getElementById('albumModal')) {
        document.getElementById('albumModal').classList.remove('active');
        document.body.classList.remove('no-scroll');
    }
});


