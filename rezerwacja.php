<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("Najpierw musisz się zalogować.");
}

// Zapis wizyty
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_uslugi = $_POST['usluga'];
    $data = $_POST['data'];
    $godzina = $_POST['godzina'];
    $stmt = $pdo->prepare("INSERT INTO wizyty (id_uzytkownika, id_uslugi, data, godzina) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_SESSION['user_id'], $id_uslugi, $data, $godzina]);
    echo "<p>Wizyta została pomyślnie zarejestrowana!</p>";
}

// Pobranie listy usług
$uslugi = $pdo->query("SELECT * FROM uslugi")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Rezerwacja wizyty</h2>
<form method="POST">
    Usługa:
    <select name="usluga">
        <?php foreach ($uslugi as $usluga): ?>
            <option value="<?= $usluga['id'] ?>"><?= $usluga['nazwa'] ?> (<?= $usluga['cena'] ?> zł)</option>
        <?php endforeach; ?>
    </select><br>

    Data: <input type="date" name="data" required><br>
    Godzina: <input type="time" name="godzina" required><br>
    <button type="submit">Zarezerwuj</button>
</form>
