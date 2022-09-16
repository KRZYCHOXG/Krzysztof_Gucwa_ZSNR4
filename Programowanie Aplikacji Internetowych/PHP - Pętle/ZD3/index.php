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
    $L1 = 42;
    $L2 = 56;
    while($L1 != $L2) {
        if($L1 > $L2)
        {
            $L1 = $L1 - $L2;
        } 
        else
        {
            $L2 = $L2 - $L1;
        }
    }
    echo 'NWD liczby 42 i 56 wynosi: '.$L1;
    ?>
</body>
</html>
