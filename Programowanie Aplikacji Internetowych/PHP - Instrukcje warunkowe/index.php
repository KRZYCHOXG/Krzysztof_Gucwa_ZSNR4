<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrukcje warunkowe</title>
</head>
<body>
    <?php
    $liczba = 62;
    switch ($liczba)
    {
        case 1:
            echo 'Poniedziałek';
            break;
            case 2:
                echo 'Wtorek';
                break;
                case 3:
                    echo 'Środa';
                    break;
                    case 4:
                        echo 'Czwartek';
                        break;
                        case 5:
                            echo 'Piątek';
                            break;
                            case 6:
                                echo 'Sobota :)';
                                break;
                                case 7:
                                    echo 'Niedziela';
                                    break;
                                        default;
                                        echo 'Nie znam takiego dnia';

    }
    ?>
</body>
</html>
