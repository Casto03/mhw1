function onClick(event) {
    const question = event.currentTarget; 
    const answer = question.nextElementSibling;
    const symbol = question.querySelector(".plus-symbol");

    if (answer.classList.contains("hidden")) {
        answer.classList.remove("hidden");
        symbol.classList.add("rotate");
    } else {
        answer.classList.add("hidden");
        symbol.classList.remove("rotate");
    }
}

const questions = document.querySelectorAll(".faq-question");
questions.forEach(question => {
    question.addEventListener("click", onClick);
});