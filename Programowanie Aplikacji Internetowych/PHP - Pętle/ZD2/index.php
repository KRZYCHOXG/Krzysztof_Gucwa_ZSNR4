<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle</title>
</head>
<body>
    <div>    
    <?php
    $q = 1;
    for($q = 1; $q < 35; $q++)
    {
        if($q % 5 == 0) echo $q.' ';
    }
    ?>
    </div>
    <div>    
    <?php
    $x = 1;
    for($x = 1; $x < 70; $x++)
    {
        if($x % 5 == 0) echo $x.' ';
    }
    ?>
    </div>
</body>
</html>
