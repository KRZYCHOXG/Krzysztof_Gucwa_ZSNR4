<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne i stałe</title>
</head>
<body>
    <div>
    <?php
    // Pętla For
    for($i = 1; $i <= 100; $i++) {
        if($i % 2 == 0) echo $i.' ';
    }
    ?>
    </div>
    <br>
    <div>
    <?php
    // Pętla While
    $j = 1; 
    while($j <= 100) {
        if($j % 5 == 0) echo $j.' ';
        $j++;
    }
    ?>
    </div>
    <br>
    <div>
    <?php
    // Pętla Do While
    $m = 1; 
    do {
        if($m % 3 == 0) echo $m.' ';
        $m++;
    }    
    while($m <= 100);    
    ?>
    </div>
</body>
</html>
