let next = document.querySelectorAll(".reponse");
let start = document.querySelector("#start");
let starter = document.querySelector("#starter");

start.addEventListener("click", () => {
    starter.style.display = "flex";
    starter.classList.add("starter-anim");
});

next.forEach(function(btnNext) {
    btnNext.addEventListener("click", () => {
        // Récupération de l'élément parent de chaque bouton: "question-container"
      let currentQuestion = btnNext.parentElement;
      //Seule solution trouver pour que le display none ne s'active pas avant la fin de l'animation
      currentQuestion.classList.add("question-anim");
      currentQuestion.addEventListener("animationend", function() {
          //condition pour s'assurer que le "question-container" cibler soit bien celui qui contien la class "slide-out"
          if(currentQuestion.classList.contains("question-anim")){
                currentQuestion.style.display = 'none';
               
            }
        });
    });
});
