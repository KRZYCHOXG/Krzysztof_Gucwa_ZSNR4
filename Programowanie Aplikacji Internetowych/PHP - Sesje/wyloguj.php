<?php
    session_start();
    unset($_SESSION['login_uzytkownika']);
    session_destroy();
    echo "<h2>Wylogowałeś się z systemu</h2>";
    echo '<a href="loguj.php">Zaloguj się ponowanie </a>';
?>
