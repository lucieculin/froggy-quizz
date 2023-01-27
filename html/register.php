<?php
$isPage="register";
include('../partials/header.php');
?>



<main>

<section class="contact">

    <form class="contact-form">

        <h2>Inscription</h2>

            <div class="firstName">
                <label for="firstName">Nom:</label>
                <input type="text" id="firstName" name="firstName" placeholder="Saisissez votre nom...">
            </div>



            <div class="lastName">
                <label for="lastName">Prénom:</label>
                <input type="text" id="lastName" name="lastname" placeholder="Saisissez votre prénom...">
            </div>


            <div class="email">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Saisissez votre email...">
            </div>

            <div class="userName">
                <label for="userName">Pseudo Frog:</label>
                <input type="text" id="userName" name="userName" placeholder="Saisissez votre pseudo...">
            </div>

            <div class="password">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password" name="password" placeholder="Saisissez un mot de pass...">
            </div>

        <div class="password_retype">
            <label for="password">Froggy Pass:</label>
            <input type="text" id="password" name="password" placeholder="Saisissez un mot de pass...">
        </div>
            <div class="submit">
            <input type="submit" value="ENVOYER">
            </div>

    </form>
</section>




</main>








<?php
include('../partials/footer.php')
?>
