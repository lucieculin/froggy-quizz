<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php
  include('./partials/css.php');
  include('./partials/script.php');
  ?>
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

  <section id="section" class="none-tab">
    <img src="./assets/images/cloud-back2.png" id="cloud-back" class="clouds" alt="" />
    <img src="./assets/images/sun.png" id="astre" alt="" />
     <div id="title">
      <div class="img-fq" id="img-f">
        <img src="../assets/images/F-logo-title.png" alt="" />
      </div>
      <div class="title-d-span" id="tds1">
        <span class="tsp" id="tsp1">ROGGY</span>
      </div>
      <div class="img-fq" id="img-q">
        <img id="just-q" src="../assets/images/q-logo-title.png" alt="" />
        <div class="title-d-span" id="tds2">
          <span class="tsp" id="tsp2">UIZ</span>
        </div>
      </div>
    </div>
    <span id="span1">Bienvenue sur</span>
    <span id="span2">Le meilleur quiz du monde</span>
    <img id="froggy-fly" src="./assets/images/froggy-fly.png" alt="">
    <img id="froggy-fly-blue" src="./assets/images/froggy-fly-blue.png" alt="">
    <img id="froggy-fly-orange" src="./assets/images/froggy-fly-orange.png" alt="">
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
    <div class="cloud-nav"></div>
  </nav>



  <!-- /*******************page******************************/ -->







  <div class="container-home-page">


    <div class=" quiz-vedette">
      <div class="container-margin">
        <h2 class="h2-title-section">Nos Best OF</h2>
        <div class="cards">


          <div class="card">
            <div class="front-face fnb ff1">
              <h3 class="h3-card-front">Film</h3>
            </div>
            <div class="back-face fnb bf1">

              <a class="buttonbtn bbtn1" href="/harry-potter.html">Harry Potter</a>
            </div>
          </div>


          <div class="card">
            <div class="front-face fnb ff2">
              <h3 class="h3-card-front">Histoire</h3>
            </div>
            <div class="back-face fnb bf2">
              <a class="buttonbtn bbtn2" href="/game-of-thrones.html">Les grandes dates</a>
            </div>
          </div>


          <div class="card">
            <div class="front-face fnb ff3">
              <h3 class="h3-card-front">Série</h3>
            </div>
            <div class="back-face fnb bf3">
              <a class="buttonbtn bbtn3" href="/kaamelott.html">Kaamelott</a>
            </div>
          </div>


          <div class="card">
            <div class="front-face fnb ff4 ">
              <h3 class="h3-card-front">Animés</h3>
            </div>
            <div class="back-face fnb bf4">
              <a class="buttonbtn bbtn4" href="/harry-potter.html">One piece</a>
            </div>
          </div>


          <div class="card">
            <div class="front-face fnb ff5">
              <h3 class="h3-card-front">Géographie</h3>
            </div>
            <div class="back-face fnb bf5">
              <a class="buttonbtn bbtn5" href="/harry-potter.html">Les capitales</a>
            </div>
          </div>



        </div>
      </div>
    </div>
    <div class="container-home-grid">
      <div class="container-home-left">

        <div class="wrapper-theme">
          <h2 class="h2-title-section">Nos thèmes</h2>
          <div class="theme-container">
            <div class="all-theme">

              <a href="" class="theme-icon"><img src="./assets/images/film.png" alt="logo film"></a>
              <a href="" class="theme-icon"><img src="./assets/images/serie.png" alt="logo serie"></a>
              <a href="" class="theme-icon"><img src="./assets/images/dessin-anime.png" alt="logo dessin animé"></a>
              <a href="" class="theme-icon"><img src="./assets/images/anime.png" alt="logo animé"></a>
              <a href="" class="theme-icon"><img src="./assets/images/jeux-video.png" alt="logo jeux vidéos"></a>
              <a href="" class="theme-icon"><img src="./assets/images/culture.png" alt="logo culture"></a>
            </div>
          </div>
        </div>

        <div class="container-quiz-by-theme">
          <h2 class="h2-title-section">Nos Quiz</h2>

          <div class="container-by-theme-quiz-by-theme">
            <h3 class="title-quiz-by-theme">Film</h3>
            <div class="container-quiz-quiz-by-theme">
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Harry Potter</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Star wars</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Matrix</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Plus de films</a></h4>
              </div>
            </div>
          </div>


          <div class="container-by-theme-quiz-by-theme">
            <h3 class="title-quiz-by-theme">Série</h3>
            <div class="container-quiz-quiz-by-theme">
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Game of thrones</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Kaamelott</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Breaking bad</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Plus de série</a></h4>
              </div>
            </div>
          </div>

          <div class="container-by-theme-quiz-by-theme">
            <h3 class="title-quiz-by-theme">Déssins animés</h3>
            <div class="container-quiz-quiz-by-theme">
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Le roi lion</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Toy story</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">La reine des neiges</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Plus de dessins animés</a></h4>
              </div>
            </div>
          </div>


          <div class="container-by-theme-quiz-by-theme">
            <h3 class="title-quiz-by-theme">Animé</h3>
            <div class="container-quiz-quiz-by-theme">
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">One piece</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Naruto</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Jujutsu kaisen</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Plus d'animé</a></h4>
              </div>
            </div>
          </div>


          <div class="container-by-theme-quiz-by-theme">
            <h3 class="title-quiz-by-theme">Jeux videos</h3>
            <div class="container-quiz-quiz-by-theme">
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Mario</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">World of warcraft</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Call Of Duty</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Plus de jeux videos</a></h4>
              </div>
            </div>
          </div>


          <div class="container-by-theme-quiz-by-theme">
            <h3 class="title-quiz-by-theme">Culture</h3>
            <div class="container-quiz-quiz-by-theme">
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Cuisine</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Capitales d'europes</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Mérovingiens</a></h4>
              </div>
              <div class="card-quiz-by-theme">
                <h4 class="name-card-quiz-by-theme"><a href="">Plus de culture</a></h4>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="container-home-right">

        <div class="container-podium">
          <h2 class="h2-title-section">Le Podium</h2>

          <div class="container-ranking-podium">


  <?php
  include('./partials/footer.php')
  ?>