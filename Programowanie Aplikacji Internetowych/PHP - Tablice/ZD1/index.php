<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablica</title>
    <style>
        * {
            font-family: 'Arial';
            text-align: center;
            color: white;
            padding: 15px;
            background-color: rgb(19,19,19);
        }
    </style>
</head>
<body>
    <?php  
        header("refresh: 5");
        $tablica[] = 1;
        $tablica[] = 2;
        $tablica[] = 3;
        $tablica[] = 4;
        $tablica[] = 5;
        $tablica[] = 6;
        $tablica[] = 7;
        $tablica[] = 8;
        $tablica[] = 9;
        $tablica[] = 10;
        
        for( $x = 0; $x < 10; $x++ )
        {
            echo $tablica[$x];
            echo '<br>';
        }
        ?>
</body>
</html>
