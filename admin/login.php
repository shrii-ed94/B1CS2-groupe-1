<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion Admin</title>
</head>
<body>
<h1>Connexion Administrateur</h1>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
<label>Nom d'utilisateur : <input type="text" name="username" requir>
<label>Mot de passe : <input type="password" name="password" require>
<button type="submit">Se connecter</button>
</form>
</body>
</html>
 
<?php
session_start();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../inc/config.php');
$username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM admins WHERE username = ? AND password = SHA1(?)";
    $stmt = $connexion->prepare($sql);
    $stmt->execute([$username, $password]);
    $admin = $stmt->fetch();
 
    if ($admin) {
        $_SESSION['admin'] = $admin['username'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
 
require_once('../inc/config.php');
$sql = "
    SELECT sacs.id, sacs.nom, sacs.prix, designers.nom AS designer_nom
    FROM sacs
    JOIN designers ON sacs.id_designer = designers.id
";
$resultat = $connexion->query($sql);
$sacs = $resultat->fetchAll();
?>
