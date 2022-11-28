<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strona Logowania</title>
</head>
<body>
<img class="wallpaper" src="wallpaper.jpg" alt="">
    <div class="notyfication"><a href="notify.html">Powiadomienia</a></div>
    <div class="ad"><a href="ad.html">REKLAMA AD</a></div>
    <a class="policy" href="policy.html">Polityka prywatności</a>
    <div class="login">
        <h1>Zaloguj się ✅</h1>
            <form class="form-login" method="post">
                <input type="text" placeholder="Login" name="login">
                <br>
                <input type="password" placeholder="Hasło" name="haslo">
                <br>
                <input style="width:130px; text-transform: uppercase;" type="submit" value="zatwierdź">
        </form>
    </div>
<div class="error">
<?php
    if(isset($_POST['login'])){
        if(empty($_POST['login'])|| empty($_POST['haslo'])){
            echo '<h4 id="h4">Wprowadz dane logowania ❗</h4>';
        }
        else{
            $_SESSION['login_uzytkownika'] = $_POST['login'];
            $_SESSION['zalogowany'] = true;
            header('Location: start.php');
        }
    }
    echo '<p> Nie masz konta? <a href="./createacc.php"> Załóż je 👈</a></p>';
    ?>
</div>
</body>
</html>