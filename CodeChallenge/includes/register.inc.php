<?php

// Register

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';

    // Error messages
    if (emptyInputRegister($name, $email, $username, $pwd, $pwdRepeat) !==  false){
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !==  false){
        header("location: ../register.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !==  false){
        header("location: ../register.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !==  false){
        header("location: ../register.php?error=passworddontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !==  false){
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../register.php");
    exit();
}