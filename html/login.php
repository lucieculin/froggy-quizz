
<?php
require_once '../vendor/autoload.php';
$isPage="login";
include('../partials/header.php');



session_start();
include('./html/config.php') ;
if(isset($_POST['userName']) && isset($_POST['password']))
{

    $userName = htmlspecialchars($_POST['userName']);
    $password = htmlspecialchars($_POST['password']);

    try

    {
        $bdd = new PDO('mysql:host=localhost;dbname=froggy_quiz;charset=utf8','root','');
    }catch(Exception $e)
    {
        die('Erreur' .$e->getMessage());
    }

    $check = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $check->bindValue(1, $email, PDO::PARAM_INT);
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $password = hash('sha256',$password);
            if($data['password'] === $password)
            {
                $_SESSION['user'] = $data['userName'];
                header('Location:mon_compte.php');
            }else header('Location: login.php?login_err=password');
        }else header('Location:login.php?login_err=email');
    }else header('Location:login.php?login_err=already');
}else header('location:login.php');
    ?>
<main>

    <section class="contact">

        <form class="contact-form">

            <h2>Connexion</h2>

            <div class="label-input">
                <label for="nickName">Pseudo Frog:</label>
                <input type="text" id="nickName" name="nickName" placeholder="Saisissez votre pseudo...">
            </div>

            <div class="label-input">
                <label for="password">Froggy Pass:</label>
                <input type="text" id="password" name="password" placeholder="Saisissez un mot de pass...">
            </div>


            <div class="submit">
                <input type="submit" value="Connexion">
            </div>

        </form>
        <div class="to-register">
            <a href="./register.php">Creer un compte.</a>
        </div>
    </section>




</main>








<?php
include('../partials/footer.php')
?>
