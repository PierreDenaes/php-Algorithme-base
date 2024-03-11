<?php
$title="KeygenGen";
include "../common/head.php";
include "../common/menu.php";
?>
<h2>Générateur de mot de passe BCRYPT</h2>
    <form action="keygenGenerator" method="post">
        <label for="password">Entrez le mot de passe:</label>
        <input type="text" id="password" name="password" required>
        <input type="submit" value="Crypter">
    </form>

<?php
    // Traitement du formulaire avec un conditional statement
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["password"])) {
        // Crypter le mot de passe avec BCRYPT
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        echo "<p>Mot de passe crypté: " . $hashedPassword . "</p>";
    }
include "../common/footer.php";
?>