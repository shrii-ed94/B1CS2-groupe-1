<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
 
require_once('../inc/config.php');
 
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $designer = $_POST['id_designer'];
 
    $sql = "INSERT INTO sacs (nom, description, prix, id_designer) VALUES (?>
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$nom, $description, $prix, $designer]);
    header('Location: dashboard.php');
    exit;
}
$designers = $connexion->query("SELECT * FROM designers")->fetchAll();
?>
 
 
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Ajouter un sac</title>
</head>
<body>
<a href="dashboard.php">Retour au tableau de bord</a>
 
    <h1>Ajouter un sac</h1>
<form method="POST">
<input type="text" name="nom" placeholder="Nom" required><br>
<textarea name="description" placeholder="Description"></textarea><b>
<input type="number" name="prix" placeholder="Prix" step="0.01" requ>
<select name="id_designer" required>
<option value="">-- Designer --</option>
<?php foreach ($designers as $d): ?>
<option value="<?= $d['id'] ?>"><?= htmlspecialchars($d['nom>
<?php endforeach; ?>
</select><br>
<button type="submit">Ajouter</button>
</form>
</body>
</html>
