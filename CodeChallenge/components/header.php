<?php
  session_start();
?>

<!-- Bootstrap og css linkup -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<!-- Bootstrap Script linkup -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Header -->
<nav class="navbar navbar-expand-lg py-3" style="background-color: #151515;">
    <a class="navbar-brand" href="index.php">
      <img src="https://cdn.pixabay.com/photo/2020/01/23/17/54/popcorn-4788367_960_720.png" alt="..." height="36">
    </a>
    <a class="navbar-brand" href="index.php" style="color: #333333;">MOVIE<span class="navbar-brand" href="index.php" style="color: red;">LIBARY</span></a>
    <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-dark navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Genre
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Comedy</a>
            <a class="dropdown-item" href="#">Drama</a>
            <a class="dropdown-item" href="#">Horror</a>
            <a class="dropdown-item" href="#">Romance</a>
            <a class="dropdown-item" href="#">Thriller</a>
          </div>
        </li>
        <?php
        // Hvad der skal vises når man er logget ind
        if (isset($_SESSION["useruid"])) {
          echo"<li class='nav-item'><a class='nav-link' href='wishlist.php'>Wishlist</a></li>";
          echo"<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
        }
        // Hvad der skal vises når man ikke er logget ind
        else {
          echo"<li class='nav-item'><a class='nav-link' href='login.php'>Log in</a></li>";
          echo"<li class='nav-item'><a class='nav-link' href='register.php'>Register</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>
