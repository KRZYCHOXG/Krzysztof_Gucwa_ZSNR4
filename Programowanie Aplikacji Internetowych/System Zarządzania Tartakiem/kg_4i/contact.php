<?php
session_start();
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
    <title>Kontakt</title>
</head>
<body>
    <img class="wallpaper" src="wallpaper6.jpg" alt="">
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
        <div class="document">
            <h1>Formularz Kontaktowy</h1>
            <div class="contact-stuff">
                <h3>Numer Tel: 0x0000000</h3>
                <h3>NIP: 00111222334</h3>
                <h3>Położenie geograficzne: 49°37′30″N 20°41′44″E</h3>
                <h3>Strona internetowa: <a href="https://zsnr4.net/">Zespół Szkół Nr 4</a></h3>
                <h3>Miasto: Nowy Sącz</h3>
            </div>
            <div class="contact">
                <form action="" method="POST"><br>
                    <h3 class="serv-title-h3">wprowadz dane osobowe</h3>
                    <input style="width: 240px; text-align: center; margin: 0 auto;" type="text" placeholder="Imie" id="fname" name="fname" value=""><br><br>
                    <input style="width: 240px; text-align: center; margin: 0 auto;" type="text" placeholder="Nazwisko" id="sname" name="sname" value=""><br><br>
                    <input style="width: 240px; text-align: center; margin: 0 auto;" type="text" placeholder="Email" id="mail" name="mail" value=""><br><br>
                    <textarea placeholder="Napisz coś do Nas" name="messenge" value=""></textarea><br>
                    <input type="checkbox" id="contact-checkbox-buyer" placeholder="contact-checkbox-buyer" name="contact-checkbox-buyer" value="Tak">
                    <label for="contact-buyer" id="contact-buyer">Zgoda przetwarzania danych osobowych</label>
                    <input id="contact-button" type="submit" value="Wyślij">
                    <?php
                require_once("./db.php");
                if(isset($_POST['fname'])) {
                    $con_name = $_POST['fname'];
                    $con_sname = $_POST['sname'];
                    $con_mail = $_POST['mail'];
                    $con_contact_checkbox_buyer = $_POST['contact-checkbox-buyer'] ?? 'Nie';
                    $con_messenge = $_POST['messenge'] ?? 'Brak';

                if (empty($con_name) || empty($con_sname) || empty($con_mail) || empty($con_messenge)) {
                    echo '<h2 id="con-confirmed">Wypełnij wszystkie pola</h2>';
                    }
                    else {
                        $con_c = new mysqli($server, $user, $pass, $database);
                        if ($con_c->connect_error) {
                        die("ERROR " . $con_c->connect_error);
                        }
                        $con_q = "INSERT INTO contacts VALUES(NULL, '$con_name','$con_sname','$con_mail','$con_contact_checkbox_buyer','$con_messenge')";
                        if ($con_c->query($con_q) === TRUE) {
                            echo '<h2 id="con-confirmed">Wiadomość wysłana</h2>';
                          } else {
                            echo '<h2 id="con-confirmed">Error: </h2>' . $con_q . "<br>" . $con_c->error;
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