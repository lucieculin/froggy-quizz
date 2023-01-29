let next = document.querySelectorAll(".reponse");
let start = document.querySelector("#start");
let starter = document.querySelector("#starter");
let allQuestions = document.querySelectorAll(".question-container");
let currentQuestionIndex = 9;

start.addEventListener("click", () => {
    starter.style.display = "flex";
    starter.classList.add("starter-anim");
    starter.addEventListener("animationend", function () {
        if (starter.classList.contains("starter-anim")) {
            starter.style.display = "none";
            allQuestions[currentQuestionIndex].style.display = "flex";
        }
    });
});

next.forEach(function (btnNext) {
    btnNext.addEventListener("click", () => {
        // Récupération de l'élément parent de chaque bouton: "question-container"
        allQuestions[currentQuestionIndex].style.display = "none";
                currentQuestionIndex--;
                allQuestions[currentQuestionIndex].style.display = "flex";
            });
        });
