<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis u Stasia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Witaj, zaloguj się do serwisu.</h2>
    <div class = "form">
        <form action="logowanie.php" method="POST">
            <input type="text" name="login" placeholder = "Login">
            <input type="password" name="haslo" placeholder = "Hasło">
            <input type="submit" value="Zaloguj się" name="loguj">
        </form>
        <?php
            if(isset($_SESSION['error'])) {
                echo '<div class="error">' . $_SESSION['error'] . "</div>";
                unset($_SESSION['error']);
            }
        ?> 
        <p> Nie masz konta? <a href="./rejestracja.php"> Załóż je </a></p>
    </div>
</body>
</html>
