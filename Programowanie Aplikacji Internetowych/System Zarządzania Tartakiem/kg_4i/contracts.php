<?php
session_start();
if(!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] == false){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamówienia</title>
</head>
<style>
    * {
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        background-color: rgb(30,30,30);
        text-align: center;
    }
    img {
        position: relative;
        top: 100px;
    }
    h1 {
        padding: 10px;
    }
    a {
        position: relative;
        top: 10px;
        padding: 10px;
        margin: 12px;
        background-color: rgb(50,50,50);
        text-decoration: none;
        border-radius: 12px;
    }
    a:hover {
        background-color: rgb(80,80,80);
        transition: 0.3s;
    }
    table, th, td {
        margin: 0 auto;
        padding: 10px;
        border: 1px solid white;
}
</style>
<body>
    <h1>ZAMÓWNIENIA</h1>
    <h1>CZAS DOSTAWY 3 DNI ROBOCZE</h1>
    <?php
    require_once("./db.php");
    $conn = new mysqli($server, $user, $pass, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM buyers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Imie</th><th>Nazwisko</th><th>Typ drzewa</th><th>Ilość desek</th><th>Zgoda Polityczna</th><th>Dodatkowe Informacje</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["Imie"]. "</td><td>" . $row["Nazwisko"]. "</td><td>" . $row["Typ drzewa"]. "</td><td>" . $row["Ilość desek"]. "</td><td>" . $row["Zgoda Polityczna"]. "</td><td>" . $row["Dodatkowe Informacje"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo '<p id="contracts-info">BRAK WYNIKÓW</p>';
    }
    ?>
    <img src="https://placeimg.com/640/480/any" alt=""><br>
    <a href="services.php">Powrót do Strony Usługi</a>
</body>
</html>