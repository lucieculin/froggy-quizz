
<?php

if($isCss==="home"){
    echo "<link rel='stylesheet' href='../styles/accueil.css'>";
  
}elseif ($isCss==="avatar") {
    echo "<link rel='stylesheet' href='../styles/avatar.css'>";
}

else{
   ?> <script>console.log("echec css")</script> <?php
};

?>
