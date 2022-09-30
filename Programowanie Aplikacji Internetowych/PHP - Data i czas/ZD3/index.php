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
        echo '<h1 style="text-transform: uppercase;"> Ile zostało do końca roku szkolnego </h1>';
        $teraz = new DateTime(date('Y-m-d'));
        $do_konca_roku = new DateTime('2023-06-24');
        $obliczenie = $teraz->diff($do_konca_roku);
        echo $obliczenie->format('%m miesięcy,  %d dni');
        echo '<br>';
        echo $obliczenie->format('%a dni');
    ?>
</body>
</html>
