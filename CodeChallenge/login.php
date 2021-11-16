<?php
    include_once "components/header.php";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WATCHA | Login</title>

        <link rel="stylesheet" href="css/form.css">
    </head>
<body>


<!-- Login form -->
<div class="login-form">
    <form action="includes/login.inc.php" method="post">
        <h2 class="text-center">Login</h2>    
        <div class="form-group">
            <input type="text" name="uid" class="form-control" placeholder="Username / Email">
        </div>   
        <div class="form-group">
            <input type="password" name="pwd" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>    
    </form>
    <p class="text-center"><a href="register.php">Create an account?</a></p>
</div>

<!-- Error beskeder til login -->

<?php
    if(isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo"<p class='text-center'>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo"<p class='text-center'>Incorret login information!</p>";
        }
    }
?>

</body>
</html>