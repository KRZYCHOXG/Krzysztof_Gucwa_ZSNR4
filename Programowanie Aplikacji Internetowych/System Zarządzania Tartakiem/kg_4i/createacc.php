<?php
    session_start();
    require_once("./db.php");

    if(isset($_POST['zaloz'])) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $haslo2 = $_POST['haslo2'];

        $walidacja = true;

        if($walidacja) {
            if(strlen($imie < 3)) {
                $walidacja = false;
                $_SESSION['imie_error'] = "Wpisz poprawne imię!";
            }
            if(strlen($nazwisko < 3)) {
                $walidacja = false;
                $_SESSION['nazwisko_error'] = "Wpisz poprawne nazwisko!";
            }
            if(!ctype_alnum($login)) {
                $walidacja = false;
                $_SESSION['login_error'] = "Wpisz poprawny login! (bez polskich znaków)";
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $walidacja = false;
                $_SESSION['email_error'] = "Wpisz poprawnego maila!";
            }
            if($haslo != $haslo2) {
                $walidacja = false;
                $_SESSION['haslomatch_error'] = "Hasła nie są identyczne!";
            }
        }

        if($walidacja) {
            require_once("./db.php");

            mysqli_report(MYSQLI_REPORT_STRICT);

            try {
                $polaczenie = new mysqli($server, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e) {
                $_SESSION ['error'] = $e;
                exit();
            }

            $login = htmlentities($login);
            $haslo = htmlentities($haslo);
            $login = $polaczenie -> real_escape_string($login);
            $haslo= $polaczenie -> real_escape_string($haslo);

            $request = 'SELECT login FROM users WHERE login = "' . $login . '"';
            $wynik = $polaczenie->query($request);
            if($wynik->num_rows > 0) {
                $_SESSION['login_error'] = "Login jest zajęty";
                unset($_SESSION['login_error']);
            } else {
                $haslo = password_hash($haslo, PASSWORD_DEFAULT);

                $zapytanie = "INSERT INTO users VALUES(NULL, '$imie', '$nazwisko', '$login', '$haslo', '$email')";
                if($polaczenie->query($zapytanie)) {
                    header("Location: login.php");
                    $polaczenie->close();
                } else {
                    echo "ERROR";
                }     
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .form {
        display: block;
        position: fixed;
        transform: translateY(40%);
        left: 100px;
    }
    @media (max-width: 1000px) {
        .form {
        display: block;
        position: fixed;
        transform: translateY(30%);
        }
    }
    @media (max-width: 600px) {
        .form {
        display: block;
        position: fixed;
        transform: translateY(20%);
        font-size: 90%;
        }
    }
    @media (max-width: 600px) {
        .form {
        display: block;
        position: fixed;
        transform: translateY(30%);
        font-size: 90%;
        left: 50px;
        }
    }
    .create-button {
        height: 3px;
    }
</style>
<body>
<div class="notyfication"><a href="notify.html">Powiadomienia</a></div>
<div class="ad"><a href="ad.html">REKLAMA AD</a></div>
<a class="policy" href="policy.html">Polityka prywatności</a>
<img class="wallpaper" src="wallpaper7.jpg" alt="">
    <div class="form">
    <form action="" method="POST">
    <h2 class="title">REJESTRACJA ✅</h2><br><br>
        <input type="text" name="imie" placeholder = "Imię"> <br>
        <input type="text" name="nazwisko" placeholder = "Nazwisko"> <br>
        <input type="email" name="email" placeholder = "E-mail"> <br>
        <input type="text" name="login" placeholder = "Login"> <br>
        <input type="password" name="haslo" placeholder = "Hasło"> <br>
        <input type="password" name="haslo2" placeholder = "Powtórz hasło"> <br>
        <input id="create-button" type="submit" value="Załóż konto" name = "zaloz">
        <a href="login.php"> Powrót do logowania 👈</a>
    </form>
    </div>
</body>
</html>