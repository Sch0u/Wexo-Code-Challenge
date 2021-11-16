<?php
    include_once "components/header.php";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MOVIELIBARY | Register</title>

        <link rel="stylesheet" href="css/form.css">
    </head>
<body>

<!-- Register Form -->

<div class="login-form">
    <form action="includes/register.inc.php" method="post">
        <h2 class="text-center">Register</h2>   
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Full name">
        </div>   
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="uid" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" name="pwd" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" name="pwdrepeat" class="form-control" placeholder="Repeat password">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
        </div>        
    </form>
    <p class="text-center"><a href="login.php">Already have an account?</a></p>
</div>

<!-- Error beskeder til register -->

<?php
    if(isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo"<p class='text-center'>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo"<p class='text-center'>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo"<p class='text-center'>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passworddontmatch") {
            echo"<p class='text-center'>Password doesn't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo"<p class='text-center'>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo"<p class='text-center'>Username allready taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo"<p class='text-center'>Registered succesfully!</p>";
        }
    }
?>


</body>
</html>