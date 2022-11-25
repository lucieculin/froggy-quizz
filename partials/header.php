<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <script src="../script.js" defer></script>
    <title>Footer responsive</title>
  </head>

  <body>
    <nav class="nav1">
      <div class="container">
        <div class="logoContainer">
          <a class="imgLogo1">
            <img
              src="/assets/images/F-logo.png"
              alt="logo_froggy_quiz"
              class="logo"
            />
          </a>
          <div class="sp1 logospan">
            <span class="spsp">ROGGY</span>
          </div>
        </div>

        <div class="logoContainer">
          <a class="imgLogo2">
            <img
              src="/assets/images/q-logo.png"
              alt="logo_froggy_quiz"
              class="logo"
            />
          </a>
          <div class="sp2 logospan">
            <span class="spsp">UIZ</span>
          </div>
        </div>
      </div>
      <div class="contain-right">
        <div class="container-search">
          <input type="search" class="search" placeholder="Rechercher" />
          <button class="loupe" type="submit">
            <img src="../assets/images/loupe.png" alt="image de loupe" />
          </button>
        </div>

        <div class="connexion">
          <a href="#">Login</a>
        </div>
      </div>
    </nav>

    <nav class="nav2">
      <ul class="list-nav2">
        <div class="nav navdrop" id="nav2nav1">
          <a href="#" class="underline">Jouer</a>
          <ul class="drop">
            <li>Themes</li>
            <li>Mode de jeu</li>
            <li>Partie rapide</li>
          </ul>
        </div>
        <div class="nav navdrop">
          <a href="#" class="underline">Profil</a>

          <ul class="drop">
            <li>Mon compte</li>
            <li>Mon identité</li>
      
          </ul>
        </div>

        <div class="nav navdrop">
          <a href="#" class="underline">Règlages</a>
  
          <ul class="drop">
            <li id="language">Languages</li>
            <li id="container-sousmenu-language">
              <ul id="box-language">
                <li id="fr">Francais</li>
                <li id="uk">English</li>
              </ul>
              
             </li>
          <li id="theme">Thèmes</li>
          <li id="container-sousmenu-theme"></li>
          <ul id="box-theme">
            <li id="light">Light</li>
            <li id="dark">Dark</li>
          </ul>
        </ul>
      </div>
        <div class="nav">
          <a href="#" id="no-drop" class="no-drop underline">Boutique</a>

          <!-- <ul class="drop">
            <li>random</li>
            <li>random</li>
            <li>random</li>
            <li>random</li>
            <li>random</li>
          </ul> -->
        </div>
       
      <div class="indicator" id="indicator">
          <div id="indicator-sousmenu">
        </div>
      </ul>
    </nav>