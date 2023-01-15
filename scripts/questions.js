let next = document.querySelectorAll(".btn-suivant")


next.forEach(function(btnNext) {
    btnNext.addEventListener("click", () => {
        // Récupération de l'élément parent de chaque bouton: "question-container"
      let currentQuestion = btnNext.parentElement;
      //Seule solution trouver pour que le display none ne s'active pas avant la fin de l'animation
      currentQuestion.style.display = "block";
      currentQuestion.classList.add("slide-out");
      currentQuestion.addEventListener("animationend", function() {
        //condition pour s'assurer que le "question-container" cibler soit bien celui qui contien la class "slide-out"
            if(currentQuestion.classList.contains("slide-out")){
                currentQuestion.style.display = 'none';
            }
        });
    });
});


/***verification des reponse***/

// let answers = document.querySelectorAll(".reponse");

// //Boucle sur chaque réponse
// answers.forEach(function(answer) {
//     answer.addEventListener("click", () => {
//         // Récupération de l'ID de la réponse cliquée
//         let answerId = answer.getAttribute("data-answer-id");
//         // Envoi de la requête AJAX pour récupérer les données de l'objet "answer"
//         let xhr = new XMLHttpRequest();
//         xhr.open("POST", "../App/repository/AnswerRepository.php", true);
//         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//         xhr.onreadystatechange = function() {
//             if (xhr.readyState === 4 && xhr.status === 200) {
//                 let response = JSON.parse(xhr.responseText);
//                 if (response.is_true) {
//                     console.log("La réponse est correcte");
//                 } else {
//                     console.log("La réponse est incorrecte");
//                 }
//             }
//         };
//         xhr.send("answer_id=" + answerId);
//         console.log(json_encode($answer));
//     });
// });