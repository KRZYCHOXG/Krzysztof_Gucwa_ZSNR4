<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data i czas</title>
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
        header("refresh: 0.1");
        echo '<h1 style="text-transform:uppercase;">Teraz jest '.date('H:i:s').'</h1>';
        $teraz = new DateTime(date('Y-m-d'));
        $urodziny = new DateTime('2023-04-03');
        $obliczenie = $teraz->diff($urodziny);
        echo '<br>';
        echo '<h1> Urodziny mam za ';
        echo $obliczenie->format('%m miesiecy i %d dni');
    ?>
</body>
</html>
