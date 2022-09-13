<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne i stałe</title>
</head>
<body>
    <?php
    const CENA = 2;
    define('SPALANIE', 9);
    $trasa = 320;
    $wynik = ($trasa/100)*SPALANIE*CENA;
    echo 'Samochód spalający 8 litrów na 100km zużyje '.$wynik;
    ?>
</body>
</html>
