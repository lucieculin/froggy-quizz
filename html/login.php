
<?php
error_reporting( E_ERROR | E_NOTICE | E_PARSE );
require_once '../vendor/autoload.php';
$isPage="login";
include('../partials/header.php');

use App\Repository\UserRepository;

$userRepository = new UserRepository();


session_start();

if(isset($_POST['userName']) && isset($_POST['password']))
{

    $userName = htmlspecialchars($_POST['userName']);
    $password = htmlspecialchars($_POST['password']);

    $user = $userRepository->findByEmail($userName);



    if($row == 1)
    {
        if(filter_var($userName, FILTER_VALIDATE_EMAIL))
        {
            $password = hash('sha256',$password);
            if($data['password'] === $password)
            {
                $_SESSION['user'] = $data['userName'];
                header('Location:mon_compte.php');
            }else header('Location: login.php?login_err=password');
        }else header('Location:login.php?login_err=email');
    }else header('Location:login.php?login_err=already');
}
    ?>
<main>

    <section class="contact">

        <form class="contact-form" action="" method="POST">

            <h2>Connexion</h2>

            <div class="label-input">
                <label for="userName">Pseudo Frog:</label>
                <input type="text" id="userName" name="userName" placeholder="Saisissez votre pseudo...">
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
