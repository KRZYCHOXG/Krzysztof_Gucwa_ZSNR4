<?php
session_start();
require_once("./db.php");
if(!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] == false){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usługi</title>
</head>
<body>
    <img class="wallpaper" src="wallpaper5.jpg" alt="">
    <nav class="menu">
        <ul>
            <a href="start.php"><li>Start</li></a>
            <a href="services.php"><li>Usługi</li></a>
            <a href="about.php"><li>O mnie</li></a>
            <a href="contact.php"><li>Kontakt</li></a>
            <a href="logout.php"><li>Wyloguj</li></a>
        </ul>
    </nav>
    <section class="section">
        <div class="notyfication"><a href="notify.html">Powiadomienia</a></div>
        <div class="ad"><a href="ad.html">REKLAMA AD</a></div>
        <a class="policy" href="policy.html">Polityka prywatności</a>
        <a href="contracts.php" class="contracts">Zamówienia</a>
        <div class="document">
            <h1 class="serv-title-h1">firma handlowa zarządzania tartakiem<img id="logo-services" src="wood-logo.png" alt=""></h1>
            <div class="our-services">
                <form action="" method="POST"><br>
                    <h3 class="serv-title-h3">kupując nasze produkty wprowadz dane osobowe</h3>
                    <input type="text" id="serv-input" placeholder="Imie" name="fname" value=""><br><br>
                    <input type="text" id="serv-input" placeholder="Nazwisko" name="sname" value=""><br><br><br><br>
                    <h3 class="serv-title-h3">wybierz typy drzewa</h3>
                    <select class="wood-type" name="wood-type">
                        <option value="Iglaste">Drzewa Iglaste</option>
                        <option value="Liściaste" selected>Drzewa Liściaste</option>
                    </select>
                    <h3 class="serv-title-h3">wprowadz ile chcesz kupić desek</h3>
                    <h4 class="serv-title-h4">(maksymalnie klient może zamówić 400 szt.)</h4>
                    <input type="number" id="serv-input" placeholder="Liczba desek" min="1" max="400" name="wood-number" value=""><br><br><br>
                    <h3 class="serv-title-h3">dodatkowe uwagi kupującego</h3>
                    <textarea id="service-textarea" placeholder="Wpisz tutaj" name="messenge" value=""></textarea><br>
                    <input type="checkbox" id="policy-checkbox-buyer" placeholder="policy-checkbox-buyer" name="policy-checkbox-buyer" value="Tak">
                    <label for="policy-buyer" id="policy-buyer">Wyrazasz zgode na przetwarzanie danych osobowych</label>
                    <input type="submit" id="service-button" value="Zakup nasze produkty">
                    <?php 
                        require_once("./db.php");
                        if(isset($_POST['fname'])) {
                            $serv_name = $_POST['fname'];
                            $serv_sname = $_POST['sname'];
                            $serv_wood_type = $_POST['wood-type'];
                            $serv_wood_number = $_POST['wood-number'];
                            $serv_policy_checkbox_buyer = $_POST['policy-checkbox-buyer'] ?? 'Nie';
                            $serv_messenge = $_POST['messenge'] ?? 'Brak';

                        if (empty($serv_name) || empty($serv_sname) || empty($serv_wood_type) || empty($serv_wood_number)) {
                            echo '<h2 id="buy-confirmed">Wypełnij wszystkie pola</h2>';
                        }
                        else {
                            $serv_c = new mysqli($server, $user, $pass, $database);
                            if ($serv_c->connect_error) {
                            die("ERROR " . $serv_c->connect_error);
                            }

                            $serv_q = "INSERT INTO buyers VALUES(NULL, '$serv_name','$serv_sname','$serv_wood_type','$serv_wood_number','$serv_policy_checkbox_buyer','$serv_messenge')";

                            if ($serv_c->query($serv_q) === TRUE) {
                                echo '<h2 id="buy-confirmed">Zamówienie zostało zrealizowane</h2>';
                              } else {
                                echo '<h2 id="buy-confirmed">Error: </h2>' . $serv_q . "<br>" . $serv_c->error;
                              }
                            }
                        }
                        ?>
                </form> 
            </div>
        </div>
    </section>
    <footer class="footer">
    <div class="main">
    <h3>Copyright KITAS – system prawa autorskiego</h3>
    </div>
    <div class="aside">
    <h3>FB / INSTA / GITHUB</h3>
    </div>
    </footer>
</body>
</html>