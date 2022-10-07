<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalogi i pliki</title>
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
        header("refresh: 0.8");
        $kat = './kat_glowny';
        $zawartoscKatalogu = scandir($kat);
        foreach($zawartoscKatalogu as $element)
            {        
                echo "<div>$element</div>";
            }
        ?>
</body>
</html>
