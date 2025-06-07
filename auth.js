document.getElementById("registerForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    const username = this.username.value.trim();
    const password = this.password.value;

    const error = document.getElementById("error");
    error.textContent = "";

    if(username.lenghth < 4 || password.lenght < 6) {
        error.textContent = "Il nome utente deve essere lungo almeno 4 caratteri e la password almeno 6 caratteri. ";
        return;
    }

    if(!/^[a-zA-Z0-9]+$/.test(username)) {
        error.textContent = "Il nome utente può contenere solo lettere e numeri.";
        return;
    }
    if(!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/.test(password)) {
        error.textContent = "La password deve contenere almeno una lettera maiuscola, una minuscola e un numero.";
        return;
    }
    const res = await fetch("api/register.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ username, password })
    });
    const data = await res.json();

    if(data.error) {
        error.textContent = data.error;
    } else if (data.success && data.redirect) {
        window.location.href = data.redirect;
    }
});
