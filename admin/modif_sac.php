<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
 
require_once('../inc/config.php');
 
$id = $_GET['id'];
$designers = $connexion->query("SELECT * FROM designers")->fetchAll();
$sac = $connexion->query("SELECT * FROM sacs WHERE id = $id")->fetch();
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE sacs SET nom=?, description=?, prix=?, id_designer=? WHER>
    $stmt = $connexion->prepare($sql);
    $stmt->execute([
        $_POST['nom'],
        $_POST['description'],
        $_POST['prix'],
        $_POST['id_designer'],
        $id
    ]);
