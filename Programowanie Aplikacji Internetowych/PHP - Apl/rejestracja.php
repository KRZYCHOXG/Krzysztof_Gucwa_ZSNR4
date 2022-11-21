<?php
    session_start();

    if(isset($_POST['zaloz'])) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
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
            if($haslo1 != $haslo2) {
                $walidacja = false;
                $_SESSION['haslomatch_error'] = "Hasła nie są identyczne!";
            }
        }

        if($walidacja) {
            require_once("./baza.php");

            mysqli_report(MYSQLI_REPORT_STRICT);

            try {
                $polaczenie = new mysqli($server, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e) {
                $_SESSION ['error'] = $e;
                exit();
            }

            #DODAJ RESZTĘ ZABEZPIECZEŃ
            $login = htmlentities($login);
            $haslo1 = htmlentities($haslo1);
            $login = $polaczenie -> real_escape_string($login);
            $haslo1= $polaczenie -> real_escape_string($haslo1);

            #SPRAWDZANIE CZY LOGIN JEST UNIKALNY

            $request = 'SELECT login FROM users WHERE login = "' . $login . '"';
            $wynik = $polaczenie->query($request);
            if($wynik->num_rows > 0) {
                $_SESSION['login_error'] = "Login jest zajęty";
                unset($_SESSION['login_error']);
            } else {
                $haslo1 = password_hash($haslo1, PASSWORD_DEFAULT);

                $zapytanie = "INSERT INTO users VALUES(NULL, '$imie', '$nazwisko', '$login', '$haslo1', '$email')";
                if($polaczenie->query($zapytanie)) {
                    header("Location: index.php");
                    $polaczenie->close();
                } else {
                    #DOKOŃCZ
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
<body>
    <h2>Wpisz dane do rejestracji.</h2>
    <div class="form">
    <form action="" method="POST">
        <input type="text" name="imie" placeholder = "Imię">
        <div class="error">
            <?php
                if(isset($_SESSION['imie_error'])) {
                    echo $_SESSION['imie_error'];
                    unset($_SESSION['imie_error']);
                }
            ?>
        </div>
        <input type="text" name="nazwisko" placeholder = "Nazwisko">
        <div class="error">
            <?php 
                if(isset($_SESSION['nazwisko_error'])) {
                    echo $_SESSION['nazwisko_error'];
                    unset($_SESSION['nazwisko_error']);
                }
            ?>
        </div>
        <input type="email" name="email" placeholder = "E-mail">
        <div class="error">
            <?php 
                if(isset($_SESSION['email_error'])) {
                    echo $_SESSION['email_error'];
                    unset($_SESSION['email_error']);
                }
            ?>
        </div>
        <input type="text" name="login" placeholder = "Login">
        <div class="error">
            <?php 
                 if(isset($_SESSION['login_error'])) {
                    echo $_SESSION['login_error'];
                    unset($_SESSION['login_error']);
                }
            ?>
        </div>
        <input type="password" name="haslo1" placeholder = "Hasło">
        <input type="password" name="haslo2" placeholder = "Powtórz hasło">
        <div class="error">
            <?php 
                 if(isset($_SESSION['haslomatch_error'])) {
                    echo $_SESSION['haslomatch_error'];
                    unset($_SESSION['haslomatch_error']);
                }
            ?>
        </div>
        <input type="submit" value="Załóż konto" name = "zaloz">
    </form>
    </div>
</body>
</html>