<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typy Danych w PHP</title>
</head>
<body>
    <?php
    echo '<h1>Nagłówek</h1>';
    echo 'Przykładowy napis<br>';
    $liczba = 10; // Zmienna
    echo '<div>Oto liczba wynosi '.$liczba.'</div>'; // Wypisuje liczbę z zmiennej
    echo 'Liczba: $liczba<br>'; // Typ string
    echo "Liczba: $liczba<br>"; // Piorytetowo szuka zmiennej
    echo "<div style='color:red;'>Tekst $liczba</div>"; // Styl kolorowy ze zmienną
    ?>
</body>
</html>
