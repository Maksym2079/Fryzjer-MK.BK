<?php
require 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $stmt = $pdo->prepare("SELECT * FROM uzytkownicy WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($haslo, $user['haslo'])) {
        $_SESSION['user_id'] = $user['id'];
        echo "Zalogowano!";
    } else {
        echo "Błędny e-mail lub hasło.";
    }
}
?>

<form method="POST">
    E-mail: <input name="email" type="email"><br>
    Hasło: <input name="haslo" type="password"><br>
    <button type="submit">Zaloguj się</button>
</form>
