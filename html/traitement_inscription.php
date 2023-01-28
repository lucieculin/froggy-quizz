<?php
    require_once './html/config.php';

try

{
    $bdd = new PDO('mysql:host=localhost;dbname=froggy_quiz;charset=utf8','root','');
}catch(Exception $e)
{
    die('Erreur' .$e->getMessage());
}


if(isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['password_retype'])&& isset($_POST['email']))
{
    $userName = htmlspecialchars($_POST['userName']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);
    $email = htmlspecialchars($_POST['email']);
}

    $check = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $check->bindValue(1, $email, PDO::PARAM_INT);
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if ($row == 0)
    {
        if(strlen($userName) <= 100)
        {
            if(strlen($email) <= 100)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    if($password == $password_retype)
                    {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];

                        $insert = $bdd->prepare('INSERT INTO utilisateurs(userName, email, password, ip)VALUES(:userName, :email, :password, :ip)');
                        $insert->execute(array(
                            'userName' => $userName,
                            'email' => $email,
                            'password' => $password,
                            'ip' => $ip
                        ));
                        header('Location:register.php?reg_err=success');
                    }else header('Location: register.php?reg_err=password');
                }else header('Location: register.php?reg_err=email');
            }else header('Location: register.php?reg_err=email_length');
        }else header('Location: register.php?reg_err=pseudo_length');
    }else header('Location: register.php?reg_err=already');

