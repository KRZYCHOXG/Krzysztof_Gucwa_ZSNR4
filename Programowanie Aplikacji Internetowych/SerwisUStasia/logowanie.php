<?php
    session_start();
    require_once("./baza.php");
?>

<?php
    if(isset($_POST['loguj'])) {
        if(empty($_POST['login']) || empty($_POST['haslo'])){
            $_SESSION ['error'] = "Wpisz login i hasło";
            header("Location: login.php");
            exit();
        } else {
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];

            mysqli_report(MYSQLI_REPORT_STRICT);

            try {
                $polaczenie = new mysqli($server, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e) {
                $_SESSION ['error'] = $e;
                header("Location: login.php");
                exit();
            }

            $login = htmlentities($login);
            $haslo = htmlentities($haslo);
            $login = $polaczenie -> real_escape_string($login);
            
            $haslo = $polaczenie -> real_escape_string($haslo);

            $request = 'SELECT * FROM users WHERE login = "' . $login . '"';
            $wynik = $polaczenie->query($request);

            if($wynik->num_rows == 1) {
                $request = 'SELECT hasło FROM users WHERE login = "' . $login . '"';
                $wynik = $polaczenie->query($request);
                $record = $wynik->fetch_assoc();
                
                if(password_verify($haslo, $record['hasło'])) {
                    $_SESSION['user'] = $login;
                    header("Location: start.php");
                } else {
                    $_SESSION ['error'] = "Błędne hasło";
                    header("Location: login.php");
                }
                $polaczenie->close();
                   
            } else {
                $_SESSION ['error'] = "Nie ma takiego loginu!";
                header("Location: login.php");
            }
        }
    }
    $polaczenie->close();
?>