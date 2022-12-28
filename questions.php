<?php
include('./partials/header.php');
?>





<div class="main">




    <div class="title">

        <h1>KAAMELOTT</h1>

    </div>

    <div class="question">

        <h2> De quoi a peur Yvain ?</h2>

    </div>



    <div class="image">
    <img src="/assets/images/kaamelott.png">
    </div>


    
    <div class="responces">

        <div class="A"><a href="#">A. Des loups</a></div>

        <div class="B"><a href="#">B. Des tartes aux fraises</a></div>

        <div class="C"><a href="#">C. De la magie</a></div>

        <div class="D"><a href="#">D. Des guèpes</p></a></div>
    </div>



    <div class="progress">


        <?php
        $questions=[0,1,2,3,4,5,6,7,8,9];
        foreach($questions as $question){
        $isResponced=false;
        $isCorrect=false;
            if($isResponced==false){ ?>
                <img src="assets/images/pattounes grise.png">
        <?php
            }
        elseif($isResponced==true && $isCorrect==true){ ?>
                <img src="assets/images/pattounes verte.png">
        <?php
        }
        elseif($isResponced==true && $isCorrect==false){ ?>
                <img src="assets/images/pattounes rouge.png">
        <?php
        }
        }
        ?>

</div>


<?php
include('./partials/footer.php')
?>