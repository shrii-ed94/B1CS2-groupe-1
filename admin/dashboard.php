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
 
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>
</head>
