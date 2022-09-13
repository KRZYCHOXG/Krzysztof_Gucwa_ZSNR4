<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory i wyrażenia</title>
</head>
<body>
    <?php
    $liczba = 10;
    
    if($liczba==0) echo 'Podana liczba równa jest 0';
    elseif($liczba>0) 
    {
        echo 'Podana liczba jest wieksze od 0';
    }
    else echo 'Podana liczba jest mniejsza od 0';
    ?>
    <?php 
    $a = 123;
    if($a == 0):
    ?>
    <h1>Liczba jest równa 0</h1>
    <?php endif; ?>
</body>
</html>
