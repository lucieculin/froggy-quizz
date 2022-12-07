<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./accueil.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
  <script src="../script.js" defer></script>
  <script src="./accueil.js" defer></script>
  <title></title>
</head>

<body>
  <nav class="nav1" id="nav1">
    <div class="container">
      <div class="logoContainer">
        <a class="imgLogo1">
          <img src="/assets/images/F-logo.png" alt="logo_froggy_quiz" class="logo" />
        </a>
        <div class="sp1 logospan">
          <span class="spsp">ROGGY</span>
        </div>
      </div>

      <div class="logoContainer">
        <a class="imgLogo2">
          <img src="/assets/images/q-logo.png" alt="logo_froggy_quiz" class="logo" />
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

  <section id="section">
    <img src="./assets/images/cloud-back2png.png" id="cloud-back" class="clouds" alt="" />
    <img src="./assets/images/sun.png" id="astre" alt="" />
    <div id="title">
      <div class="img-fq" id="img-f">
        <img src="./assets/images/F-logo-title.png" alt="" />
      </div>
      <div class="title-d-span" id="tds1">
        <span class="tsp" id="tsp1">ROGGY</span>
      </div>
      <div class="img-fq" id="img-q">
        <img id="just-q" src="./assets/images/q-logo-title.png" alt="" />
        <div class="title-d-span" id="tds2">
          <span class="tsp" id="tsp2">UIZ</span>
        </div>
      </div>
    </div>
    <span id="span1">Bienvenue sur</span>
    <span id="span2">Le meilleur quiz du monde</span>
    <img src="./assets/images/cloud-mid.png" id="cloud" class="clouds" alt="" />
    <img src="./assets/images/cloud-contact.png" id="cloud-contact" class="clouds" alt="" />
  </section>

  <nav id="nav2" class="nav2">
    <ul class="list-nav2">
      <div class="nav navdrop" id="nav2nav1">
        <div class="underline">Jouer</div>
        <ul class="drop">
          <li>Themes</li>
          <li><a href="./defie_tes_amis.php">Mode de jeu</a> </li>
          <li>Partie rapide</li>
        </ul>
      </div>
      <div class="nav navdrop">
        <div class="underline">Profil</div>

        <ul class="drop">
          <li>Mon compte</li>
          <li>Mon identité</li>

        </ul>
      </div>

      <div class="nav navdrop">
        <div class="underline">Règlages</div>

        <ul class="drop">
          <li id="language">Languages</li>
          <li id="container-sousmenu-language">
            <ul id="box-language">
              <li id="fr">Francais</li>
              <li id="uk">English</li>
            </ul>

          </li>
          <li id="theme">Thèmes</li>
          <li id="container-sousmenu-theme">

            <ul id="box-theme">
              <li id="light">Light</li>
              <li id="dark">Dark</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="nav">
        <div id="no-drop" class="no-drop underline">Boutique</div>

        <!-- <ul class="drop">
            <li>random</li>
            <li>random</li>
            <li>random</li>
            <li>random</li>
            <li>random</li>
          </ul> -->

      </div>

      <div class="indicator" id="indicator">
        <!-- <div class="under-indicator"></div> -->
        <div id="indicator-sousmenu">
        </div>
    </ul>
    <!-- <div class="cloud-nav"></div> -->
  </nav>



  <div class="container-body quiz-vedette">
                <div class="container-margin">
                    <h2>Les quiz en vedette</h2>
                    <div class="cards">


                        <div class="card">
                            <div class="front-face fnb ff1">
                                <h3>Film</h3>
                            </div>
                            <div class="back-face fnb bf1">
                      
                                <a class="buttonbtn bbtn1" href="/harry-potter.html">Harry Potter</a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="front-face fnb ff2">
                                <h3>Histoire</h3>
                            </div>
                            <div class="back-face fnb bf2">
                                <a class="buttonbtn bbtn2" href="/game-of-thrones.html">Les grandes dates</a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="front-face fnb ff3">
                                <h3>Série</h3>
                            </div>
                            <div class="back-face fnb bf3">
                                <a class="buttonbtn bbtn3" href="/kaamelott.html">Kaamelott</a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="front-face fnb ff4 ">
                                <h3>Animés</h3>
                            </div>
                            <div class="back-face fnb bf4">
                                <a class="buttonbtn bbtn4" href="/harry-potter.html">One piece</a>
                            </div>
                        </div>


                        <div class="card">
                            <div class="front-face fnb ff5">
                                <h3>Géographie</h3>
                            </div>
                            <div class="back-face fnb bf5">
                                <a class="buttonbtn bbtn5" href="/harry-potter.html">Les capitales</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
  <div class="main"></div>
  >


  <?php
  include('./partials/footer.php')
  ?>