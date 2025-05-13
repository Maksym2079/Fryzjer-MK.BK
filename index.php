<?php
session_start();
echo "<h1>System rezerwacji wizyt do salonu fryzjerskiego</h1>";

if (isset($_SESSION['user_id'])) {
    echo "<p>Witaj, jesteś zalogowany!</p>";
    echo "<a href='rezerwacja.php'>Zarezerwuj wizytę</a>";
} else {
    echo "<a href='login.php'>Zaloguj się</a> | <a href='register.php'>Zarejestruj się</a>";
}
?>
