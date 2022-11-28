<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bazy dane</title>
</head>
<body>
    <?php
        echo '<h1>BAZA DANYCH PRACOWNIKÓW GRUPA A</h1>';
        echo '<br>';
        echo '<h3>LISTA PRACOWNIKÓW</h3>';
        $pol = mysqli_connect("localhost","root","","baza");
        if (!$pol)
          {
          die('ERROR BŁĄD ' . mysql_error());
          }
        
        $z = $pol->query("SELECT * FROM pracownicy");
        while ($r = $z->fetch_assoc()) {
            echo "<p>Imię: ".$r["imie"].", nazwisko: ".$r["nazwisko"].", stanowisko: ".$r["stanowisko"]."</p>";
        }
        echo '<br>';
        echo '<h3>Ponizej wyswietla pensje od NAJnizszego</h3>';
        echo '<br>';
        $z = $pol->query("SELECT * FROM pracownicy ORDER BY pensja ASC");
        while ($r = $z->fetch_assoc()) {
            echo "<p>Imię: ".$r["imie"].", nazwisko: ".$r["nazwisko"].", stanowisko: ".$r["stanowisko"].", pensja: ".$r["pensja"]."</p>";
        }
        echo '<br>';
        echo '<h3>Ponizej wyswietla pensje od NAJwiekszej</h3>';
        echo '<br>';
        $z = $pol->query("SELECT * FROM pracownicy ORDER BY pensja DESC");
        while ($r = $z->fetch_assoc()) {
            echo "<p>Imię: ".$r["imie"].", nazwisko: ".$r["nazwisko"].", stanowisko: ".$r["stanowisko"].", pensja: ".$r["pensja"]."</p>";
        }
        echo '<br>';
        $z = $pol->query("SELECT AVG(pensja) FROM pracownicy");
        while($r = $z->fetch_assoc()) {
        echo '<h3>ŚREDNIA PENSJA W FIRMIE</h3>';
        echo $r['AVG(pensja)'];
        echo ' w zł';
        }
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<h3>LICZEBNOŚĆ PRACOWNIKÓW I ICH DZIAŁ</h3>';
        $z = $pol->query("SELECT id, stanowisko FROM pracownicy");
        while($r = $z->fetch_assoc()) {
        echo $r["id"];
        echo ' - ';
        echo $r["stanowisko"];
        echo ', ';
        }
        echo '<br>';

        $z = $pol->query("INSERT INTO pracownicy (id, imie, nazwisko, stanowisko, pensja) VALUES ('', 'Robert', 'Górnicki', 'IT', '7000')");
        echo '<br>';


        echo '<br>';
        echo '<h3>PONIZEJ ZOSTAŁ ZATRUDNIONY "PAN PROFESOR ROBERT GÓRNICKI"</h3>';
        echo '<br>';

        $z = $pol->query("SELECT * FROM pracownicy");
        while ($r = $z->fetch_assoc()) {
            echo "<p>Imię: ".$r["imie"].", nazwisko: ".$r["nazwisko"].", stanowisko: ".$r["stanowisko"]."</p>";
        }
        $pol->close();
    ?>
</body>
</html>
