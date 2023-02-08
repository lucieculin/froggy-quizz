let response = document.querySelectorAll(".reponse");
let start = document.querySelector("#start");
let starter = document.querySelector("#starter");
let allQuestions = document.querySelectorAll(".question-container");
let nexts = document.querySelectorAll(".next");
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

response.forEach(function (btnNext) {
  btnNext.addEventListener("click", () => {
    let theTrue = btnNext.classList.contains("true");
    let questionContainer = btnNext.closest(".question-container");
    let pushedButtons = questionContainer.querySelectorAll(".reponse.pushed");
    if (pushedButtons.length < 1) {
      btnNext.classList.add("pushed");
      btnNext.querySelector("*").style.transform = "scale(0.98)";
      if (theTrue) {
        btnNext.classList.add("is-true");
      } else {
        let trueButton = questionContainer.querySelector(".reponse.true");
        btnNext.classList.add("is-false");
        trueButton.classList.add("is-true");
      }
      
    }
  });
});

nexts.forEach(function (next) {
  next.addEventListener("click", () => {
    allQuestions[currentQuestionIndex].style.display = "none";
    currentQuestionIndex--;
    allQuestions[currentQuestionIndex].style.display = "flex";
  });
});
