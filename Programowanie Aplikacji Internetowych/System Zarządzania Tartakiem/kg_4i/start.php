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
    <title>Strona Startowa</title>
</head>
<body>
    <img class="wallpaper" src="wallpaper3.jpg" alt="">
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
            <h1>Projekt aplikacji na zajęcia "Programowanie Aplikacji Internetowych" pod tytułem "System zarządzania tarkakiem"</h1>
            <p>Drewno – surowiec drzewny otrzymywany ze ściętych drzew i formowany przez obróbkę w różnego rodzaju sortymenty. Zajmuje przestrzeń pomiędzy rdzeniem a warstwą łyka i kory. Pod względem technicznym drewno jest naturalnym materiałem kompozytowym o osnowie polimerowej wzmacniany ciągłymi włóknami polimerowymi, którymi są podłużne komórki zorientowane jednoosiowo. Z powodu łatwości pozyskiwania, stosunkowo niewielkich wymagań technologicznych podczas obróbki oraz innych zalet, drewno stanowi powszechnie wykorzystywaną grupę materiałów konstrukcyjnych w technice. Może być ono stosowane w postaci drewna litego lub w formie przetworzonej w postaci tzw. tworzyw drewnopochodnych. Drewno, w postaci ścieru, stanowi podstawowy składnik papieru. Może być również wykorzystywane jako paliwo do celów przemysłowych, technicznych, gospodarczych. Na świecie występuje od 30 000 do 40 000 gatunków roślin drzewiastych, z których około 4000 ma potencjalne lub rzeczywiste znaczenie użytkowe. W literaturze technicznej i naukowej dość dobrze opisano właściwości techniczne około 1500 gatunków, spośród których mniej więcej 500 jest przedmiotem światowego handlu.

            Drewno należy do najstarszych materiałów używanych przez człowieka. Pierwotnie stosowane było jako nośnik energii (spalanie) oraz podstawowy materiał budowlany do budowy chałup i domów mieszkalnych, budowli gospodarczych, kościołów, mostów, a także budowli obronnych. Wykorzystywano pnie o zróżnicowanym zakresie obróbki (z czasem przecinane na połówki), deski, a nawet plecionki z cienkich gałęzi. Przez tysiąclecia budowano z drewna ściany, stropy i dachy, kryte dranicami lub gontem. Drewna używano do wykonywania mebli, sprzętów domowych, naczyń (z czasem w konstrukcji klepkowej) i narzędzi, a także do ogrzewania i oświetlania pomieszczeń (łuczywo). Z drewna budowano środki transportu: łodzie (pierwotnie dłubane w jednym pniu) i okręty, wozy i sanie. Przez dwa stulecia było podstawowym materiałem do wykonywania obudowy górniczej w kopalniach.

            Obecnie drewno stosowane jest jako materiał konstrukcyjny oraz wykończeniowy. Swoją popularność zawdzięcza swej lekkości i wystarczającym do wielu zastosowań własnościom wytrzymałościowym. Stosuje się je jako materiał na podłogi, boazerie, do wykonania więźb dachowych budynków, altan, wiat, ogrodzeń i pergoli, mebli i zabawek. W wielu krajach, m.in. w Ameryce Północnej (USA i Kanada), drewno jest w dalszym ciągu ważnym materiałem budowlanym i używa się go do budowy większości niskich zabudowań mieszkalnych. Drewno małowartościowe, odpady powstałe przy produkcji różnych sortymentów drewna są wykorzystywane do produkcji płyt pilśniowych, wiórowych, OSB, sklejki[3], itd., które także są materiałem do wykonywania wielu przedmiotów codziennego użytku. Inne odpady drewniane (obrzynki, wióry, trociny itp.) są surowcem energetycznym.

            W Polsce, w grodzie Biskupin wszystkie domy, urządzenia obronne i wiele przedmiotów wyposażenia i codziennego użytku były wykonane z drewna.

            W drewnie rozróżniamy trzy zasadnicze przekroje:

            poprzeczny, utworzony przez przecięcie pnia prostopadle do jego osi podłużnej;
            podłużny promieniowy, utworzony przez przecięcie pnia wzdłuż jego osi podłużnej, przez rdzeń;
            podłużny styczny, utworzony przez przecięcie pnia wzdłuż jego osi podłużnej i przechodzący poza rdzeniem, czyli po stycznej do któregokolwiek pierścienia przyrostu rocznego.
            Wady i zalety drewna
            Drewno jest materiałem niejednorodnym pod względem budowy. Posiada liczne wady, anomalie, uszkodzenia lub inne wrodzone i nabyte cechy, które obniżają jego wartość techniczną i ograniczają zakres użyteczności, ale jednocześnie mogą podnosić jego walory ozdobne. Z punktu widzenia przerobu surowca drzewnego, drewno powinno mieć kształt walca, równomierną słoistość, przebieg włókien równoległy do podłużnej osi, oraz nie powinno mieć sęków (gałęzi).

            Polska norma (PN-79/D-01011, "wady drewna") wyróżnia następujące grupy wad:

            sęki,
            pęknięcia,
            wady kształtu,
            wady budowy,
            zabarwienia,
            zgnilizny,
            uszkodzenia mechaniczne.
            W porównaniu do wielu innych materiałów drewno cechuje szereg wad związanych z jego biologicznym pochodzeniem. Materiały i produkty drzewne bez odpowiedniego zabezpieczenia łatwo ulegają degradacji pod wpływem wody, owadów, grzybów i małży będących pasożytami drewna. Zmienne warunki wilgotności prowadzą często do paczenia się i pękania drewna. Owady i grzyby obniżają mechaniczną wytrzymałość drewna.

            Wady drewna zawsze powodują obniżenie jego wartości i mogą spowodować jego dyskwalifikację jako materiału. Zależą od różnych czynników:

            związane ze wzrostem drzewa to – sęki, rdzeń mimośrodowy, wielordzenność, zawoje, skręt włókien, pęknięcia (np. mrozowe) itp.;
            związane z żerowaniem owadów na drzewie lub drewnie, np. spuszczel domowy (Hylotrupes bajulus), trzpiennik żółty (Sirex gigas), rytel pospolity (Hylocoetus dermestoides), drwalnik paskowany (Trypodendron lineatum), kołatek uparty (Anobium pertinax), kołatek meblowy (Anobium domesticus), Limnoria lignorum, a także objęty ochroną gatunkową kozioróg dębosz; oraz małży, np. świdrak okrętowiec (Teredo navalis);
            związane z procesami gnilnymi, zagrzybieniem podczas wzrostu drzewa albo po jego ścięciu, powodują zmianę zabarwienia, siniznę, zgniliznę, czyli mursz.
            Przykłady grzybów rozwijających się na drewnie:

            grzyby powodujące szybki rozkład drewna na dużych powierzchniach: grzyb domowy właściwy stroczek domowy (Merulius lacrimans), grzyb domowy biały porzyca inspektowa (Poria vaporaria), grzyb piwniczny gnilica mózgowata (Coniophora cerebella), grzyb kopalniany krowiak bocznotrzonowy (Paxillus acheruntius);
            grzyby występujące "gniazdowo": grzyb podkładowy twardziak łuskowaty (Neolentinus lepideus), grzyb słupowy siatkowiec płotowy (Lensites sepiaria).
            Do ochrony drewna, zwłaszcza w budownictwie, należą takie praktyki jak:

            nieużywanie drewna pochodzącego z rozbiórki starych domów,
            niemalowanie drewna farbami olejnymi przed jego wysuszeniem,
            wietrzenie pomieszczeń, w których drewno jest zastosowane,
            wykonanie poprawnej izolacji przeciwwilgociowej,
            wykonanie impregnacji preparatami grzybo- i pleśniobójczymi,
            wykonanie zabezpieczenia przeciwogniowego.
            Zalety drewna jako surowca:

            łatwe w obróbce (gatunki miękkie),
            izoluje termicznie i elektrycznie,
            materiał ekologiczny,
            odporne na działanie wielu czynników chemicznych.</p>
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