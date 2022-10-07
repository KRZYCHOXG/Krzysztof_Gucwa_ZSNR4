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
            text-align: left;
            color: white;
            padding: 15px;
            background-color: rgb(19,19,19);
        }
        input {
            display: block;
            margin: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <textarea name="opinia"></textarea>
        <input type="submit" value="Zapisz opinie">
    </form>
    <?php  
        header("refresh: 20");
        if(isset($_POST['opinia']))
        {
            $opinia = $_POST['opinia'].PHP_EOL;
            $plikOpinie = './opinie.txt';
            file_put_contents($plikOpinie, $opinia, FILE_APPEND | LOCK_EX);

            $tab = explode(PHP_EOL, file_get_contents($plikOpinie));
            foreach($tab as $t)
            {
                echo "<p>$t</p>";
            }

        }
        ?>
</body>
</html>
