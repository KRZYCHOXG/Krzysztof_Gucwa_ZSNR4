<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przerabianie kursu z phpkurs.pl/tablice/</title>
</head>
<body>
    <?php  
    $tablica[0] = "Wpis numer 0";
    $tablice[1] = "Wpis numer 1";
    $tablica[2] = "Wpis numer 2";
    
    echo $tablica[2]; // Wyświetlony zostanie napis "Wpis numer 2";
    echo '<br>';

    $tab1[] = 1;
    $tab1[] = 0;
    $tab1[] = 3;
    $tab1[] = 2;

    $tab2[] = "Pierwszy";
    $tab2[] = "Drugi";
    $tab2[] = "Trzeci";
    $tab2[] = "Czwarty";

    echo $tab2[$tab1[2]];
    echo '<br>';

    $tablica["imie"] = "Jan";
    $tablica["nazwisko"] = "Kowalski";
    $tablica["adres"] = "Polna 1";

    echo $tablica["imie"]." ".$tablica["nazwisko"].", ul. ".$tablica["adres"]."n";
    echo '<br>';

    $tbl[] = 1;
    $tbl[] = 2;
    $tbl[] = 3;
    $tbl[] = 4;
    $tbl[] = 5;

    for( $x = 0; $x < 5; $x++ ) {   // Pętla wykona się 5 razy (0...4)
   
    echo $tbl[$x];
    echo '<br>';
    }

    $tbl[] = 1;
    $tbl[] = 2;
    $tbl[] = 3;
    $tbl[] = 4;
    $tbl[] = 5;

    for( $x = 0, $cnt = count($tbl); $x < $cnt; $x++ ){

    echo $tbl[$x];
    echo '<br>';
    }


    ?>
</body>
</html>
