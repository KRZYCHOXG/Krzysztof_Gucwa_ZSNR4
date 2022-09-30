<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data i czas</title>
</head>
<body>
    <?php  
        header("refresh: 1");
        echo '<h2>Teraz jest '.date('H:i:s').'</h2>';
    ?>
</body>
</html>
