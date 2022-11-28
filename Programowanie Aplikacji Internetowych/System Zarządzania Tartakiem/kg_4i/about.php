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
    <title>O Mnie</title>
</head>
<body>
    <img class="wallpaper" src="wallpaper4.jpg" alt="">
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
            <h1>
                Uczeń Klasy 4i - Technik Informatyk
                <img  id="about-me-logo"src="zs4-logo.png" alt="">
            </h1>
            <p>Technik informatyk -

            Zdobądź umiejętności w zakresie obsługi komputerów, systemów operacyjnych Windows, Linux, Mac, Android, konfigurowania oprogramowania, budowy sieci komputerowych a także samodzielnego tworzenia programów jako Web Developer, Front-End Developer, podstawy C++.

            Technik automatyk -

            Montuj, uruchamiaj i obsługuj układy automatyki przemysłowej. Zajmuj się eksploatacją układów automatyki przemysłowej (sterowniki, regulatory, przekaźniki, aparatura kontrolno-pomiarowa).

            Technik energetyk -

            Montuj i uruchamiaj urządzenia do przesyłania i rozdziału energii elektrycznej i cieplnej. Wykonuj konserwację oraz przeglądy instalacji i urządzeń do przesyłania i rozdziału energii elektrycznej i cieplnej.

            Technik elektronik -

            Naucz się obsługi, konstruowania i naprawy urządzeń elektronicznych, przyrządów pomiarowych, aparatury medycznej, sprzętu powszechnego użytku. Z nami zdobędziesz wiedzę potrzebną do pracy jako serwisant, sprzedawca, konstruktor czy kontroler jakości.

            Technik automatyk sterowania ruchem kolejowym

            Uzyskaj kwalifikacje aby samodzielnie prowadzić prace związane z montażem i eksploatacją urządzeń sterowania ruchem kolejowym oraz urządzeń sygnalizacji na przejazdach kolejowych.

            Szkoła (łac. schola, scola, z stgr. σχολή, skholē) – instytucja oświatowo-wychowawcza, zajmująca się kształceniem i wychowaniem w państwie, a także siedziba tej instytucji oraz jej uczniowie i personel w tym nauczyciele

            Obecnie w Polsce wyróżnia się następujące typy szkół:

            szkoła podstawowa,
            szkoła ponadpodstawowa,
            szkoły ponadpodstawowe formalne:
            liceum ogólnokształcące,
            technikum,
            szkoła branżowa I stopnia (dawniej zasadnicza szkoła zawodowa),
            szkoła branżowa II stopnia (dostęp dla tych którzy ukończą branżową szkołę I stopnia),
            szkoły ponadpodstawowe nieformalne:
            szkoła specjalna,
            szkoła specjalna przysposabiająca do pracy (dla osób niepełnosprawnych umysłowo którzy chcą dostać pracę),
            szkoła artystyczna:
            szkoła muzyczna I stopnia/ogólnokształcąca szkoła muzyczna I stopnia,
            szkoła muzyczna II stopnia/ogólnokształcąca szkoła muzyczna II stopnia,
            ogólnokształcąca szkoła sztuk pięknych,
            liceum plastyczne,
            ogólnokształcąca szkoła baletowa,
            szkoła sztuki tańca,
            szkoła sztuki cyrkowej,
            po zakończeniu szkoły ponadpodstawowej następnie do wyboru:,
            szkoła policealna (matura nie jest wymagana ale może być),
            szkoła wyższa (matura jest wymagana (nie podlega systemowi oświaty, lecz własnej regulacji o szkolnictwie wyższym)),
            W latach 1959–1972 w Polsce przeprowadzono program budowy blisko 1,5 tys. nowoczesnych szkół-pomników Tysiąclecia Państwa Polskiego, tzw. tysiąclatek.
            
            niedostateczny  1,
            dopuszczający   2,
            dostateczny 3,
            dobry   4,
            bardzo dobry    5,
            celujący    6.
        
            W praktyce szkolnej stosuje się oceny z symbolami + i -, niekiedy też z dwoma minusami: =. Dla przykładu ocena 4- (-4, słaba czwórka) jest słabsza od całej 4, ale lepsza niż 3+ (mocna trójka). Stosuje się ją, kiedy uczeń ma minimalną wiedzę, która jednak wystarcza na daną ocenę, tutaj dobrą. Ocen z plusami i minusami nie używa się jednak przy ocenianiu końcowym i rocznym, ze względu na to, że oceny te nie są wymienione w rozporządzeniu. Stosowanie ich w ocenianiu śródrocznym uzależnione jest od uregulowań w statucie szkoły, który ustala sposób oceniania bieżącego i śródrocznego.

            W przeszłości, do lat 90 XX wieku, w polskich szkołach stosowany był węższy niż dziś system ocen, w którym ocenę niedostateczną oznaczano cyfrą 2, dostateczną jako 3, dobrą jako 4, a bardzo dobrą 5. Podobnie jak dziś stosowało się oceny ze znakami + i -, które nie używano w ocenach rocznych.</p>
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