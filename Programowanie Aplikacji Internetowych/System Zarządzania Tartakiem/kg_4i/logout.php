<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wylogowałeś się</title>
</head>
<body>
<img class="wallpaper" src="wallpaper2.jpg" alt="">
    <div class="notyfication"><a href="notify.html">Powiadomienia</a></div>
    <div class="ad"><a href="ad.html">REKLAMA AD</a></div>
    <a class="policy" href="policy.html">Polityka prywatności</a>
<div class="logout">  
<?php
    session_start();
    unset($_SESSION['login_uzytkownika']);
    session_destroy();
    echo "<h2>Wylogowałeś się z systemu</h2>";
    echo "<br>";
    echo '<a href="login.php"><p id="led">Zaloguj się 👈</p></a>';
    echo "<br>";
    echo "<h5>Dziękuje za skorzystanie z tej aplikacji</h5>";
?>
</div>
</body>
</html>