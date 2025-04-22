<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
 
require_once('../inc/config.php');
$id = $_GET['id'];
 
$connexion->prepare("DELETE FROM sacs WHERE id = ?")->execute([$id]);
header('Location: dashboard.php');
exit;
?>
