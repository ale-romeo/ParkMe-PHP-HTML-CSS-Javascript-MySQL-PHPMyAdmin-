<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parking Lot Management System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
  <div class="loginbox">
    <?php
    if (isset($_SESSION["error"])) {
        echo "<button id='button' class='home-button' onclick=\"location.href='index.php'\">Home</button><br>
        <img src='img/logo.png' alt='logo' />
        <p class='downlogo'>" . $_SESSION["error"] . " Try again.</p>";
        unset($_SESSION["error"]);
    }else{
        echo "<button id='button' class='home-button' onclick=\"location.href='index.php'\">Home</button><br>
        <img src='img/logo.png' alt='logo' />
        <p class='downlogo'>Login</p>";
    }
    ?>
    <form action="login.php" method="post">
        <label><input type="text" placeholder="Username" name="username" required></label><br>
        <label><input type="password" placeholder="Password" name="password"id="password" required><i class="far fa-eye" id="togglePassword"></i></label><br>
        <script src="js/land.js"></script>
        <input type="submit" name="login" value="Log in">
        <p class="belowtxt">Don't have an account? <a href="signup_page.php" class="signup-button">Sign up</a></p>
    </form>
  </div>
</body>
<footer>
  <div class="footer">
    <div class="left">
      <p class="copyright">Copyright 2022</p>
    </div>
    <div class="center">
      <ul>
        <li><a href="mailto:romeoalessandroing@gmail.com" class="contact">Contact</a></li>
      </ul>
    </div>
    <div class="right">
      <p class="author">Alessandro Romeo</p>
    </div>
  </div>
</footer>
</html>