<?php
require_once('../inc/config.php');

$sql = "
    SELECT sacs.nom AS nom_sac, sacs.prix, sacs.description, designers.nom AS designer_nom
    FROM sacs
    JOIN designers ON sacs.id_designer = designers.id
";

$requete = $connexion->query($sql);
$sacs = $requete->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Listes des sacs</title>
    <link rel="stylesheet" href="../css/liste_sacs.css">
</head>
<body>
    <h1>Nos sacs de luxe</h1>

    <nav>
        <a href="../index.html">Retour à l'accueil</a> |
        <a href="../admin/login.php">Espace admin</a>
    </nav>

    <?php foreach ($sacs as $sac): ?>
        <div class="sac">
            <h2><?= htmlspecialchars($sac['nom_sac']) ?></h2>
            <p><strong>Prix :</strong> <?= htmlspecialchars($sac['prix']) ?> €</p>
            <p><strong>Créateur :</strong> <?= htmlspecialchars($sac['designer_nom']) ?></p>
            <p><?= htmlspecialchars($sac['description']) ?></p>
        </div>
    <?php endforeach; ?>

    <aside>
        <p>Les administrateurs peuvent gérer les sacs via leur espace dédié.</p>
    </aside>
</body>
</html>
