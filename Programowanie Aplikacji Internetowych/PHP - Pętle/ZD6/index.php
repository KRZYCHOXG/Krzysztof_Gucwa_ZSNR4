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
        $numerek = 1;
        do {
            if($numerek % 2 == 0) echo $numerek.' ';
            $numerek++;
        }
        while($numerek <= 70);
        ?>
    </div>
</body>
</html>
