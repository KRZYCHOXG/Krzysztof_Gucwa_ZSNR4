<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>
<body>
    <?php
    // https://pl.wikipedia.org/wiki/Silnia
    $silnia = 1;
    $zmienna1 = 12;

    if($zmienna1 == 0)
    {
        echo '0';
    }
    else
    {
        for($zmienna2 = 1; $zmienna2 <= $zmienna1; $zmienna2++)
        {
            $silnia = $silnia * $zmienna2;
        }
        echo 'Silnia z liczby '.$zmienna1.' wynosi: '.$silnia;
    }
    ?>
</body>
</html>
