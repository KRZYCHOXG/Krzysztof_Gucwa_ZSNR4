<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <?php  
    $a = 10;
    $b = 2;
    function suma($a,$b)
    {
        return $a + $b;
    }
    function roznica($a,$b)
    {
        return $a - $b;
    }
    function mnozenie($a,$b)
    {
        return $a * $b;
    }
    function dzielenie($a,$b)
    {
        return $a/$b;
    }
    echo suma($a,$b).'   - Funkcja suma <br>';
    echo roznica($a,$b).'   - Funkcja różnica <br>';
    echo mnozenie($a,$b).'   - Funkcja mnożenie <br>';
    echo dzielenie($a,$b).'   - Funkcja dzielenie <br>';
    ?>
</body>
</html>
