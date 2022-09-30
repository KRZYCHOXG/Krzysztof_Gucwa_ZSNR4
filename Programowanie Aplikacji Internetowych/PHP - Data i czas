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
        $teraz = new DateTime(date('Y-m-d'));
        $koniec = new DateTime('2018-06-22');
        $roznica = $teraz->diff($koniec);
        echo $roznica->format('%m miesiecy,  %d dni');
        echo '<br>';
        echo $roznica->format('%a dni');
    ?>
</body>
</html>
