<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $haslo = password_hash($_POST['haslo'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO uzytkownicy (imie, nazwisko, email, haslo) VALUES (?, ?, ?, ?)");
    $stmt->execute([$imie, $nazwisko, $email, $haslo]);

    echo "Zarejestrowano pomyślnie!";
}
?>

<form method="POST">
    Imię: <input name="imie"><br>
    Nazwisko: <input name="nazwisko"><br>
    E-mail: <input name="email" type="email"><br>
    Hasło: <input name="haslo" type="password"><br>
    <button type="submit">Zarejestruj się</button>
</form>
