<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Witaj w naszym serwisie! Życzymy miłej pracy! Cyk fuch!</h2>
    <p>Jesteś zalogowany jako: 
        <span>
            <?php
            if(isset($_SESSION['user'])) {
                echo $_SESSION['user'];
            }
            ?>
        </span>
    </p>
    <a href="./wyloguj.php">Wyloguj się</a>
</body>
</html>