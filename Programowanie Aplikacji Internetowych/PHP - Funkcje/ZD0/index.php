<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <div style="text-transform:uppercase">formularz</div><br>
    <form action="" method="post">
        <input type="number" name="liczba1" placeholder="Podaj liczbe 1">
        <input type="number" name="liczba2" placeholder="Podaj liczbe 2">
        <input type="submit" value="Oblicz">
    </form>
    <?php  
    function suma($a,$b)
    {
        echo ($a+$b);
    }
    function roznica($a,$b)
    {
        echo ($a-$b);
    }
    function mnozenie($a,$b)
    {
        echo ($a*$b);
    }
    function dzielenie($a,$b)
    {
        echo ($a/$b);
    }

    if(isset($_POST['liczba1'])) 
    {
        $l1 = $_POST['liczba1'];
        $l2 = $_POST['liczba2'];
        echo '<br><br>';
        echo 'Wywołanie funkcji suma: ';
        suma($l1,$l2);
        echo '<br><br>';
        echo 'Wywołanie funkcji różnica: ';
        roznica($l1,$l2);
        echo '<br><br>';
        echo 'Wywołanie funkcji dzielenia: ';
        dzielenie($l1,$l2);
        echo '<br><br>';
        echo 'Wywołanie funkcji mnozenia: ';
        mnozenie($l1,$l2);
    }
    ?>
</body>
</html>
