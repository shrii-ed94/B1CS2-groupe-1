<?php define('BASE', '/JLS/'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        <?php    
        if(isset($title)){
            echo $title; 
        } else {
            echo 'Nos sacs JLS';
        }
        ?>
   <meta charset="UTF-8">
  <meta name="Description" content="">
  <title>JLS</title>
  <link rel="stylesheet" href="<?=BASE ?>css/style.css">
</head>
<body>
  <header>
    <div class="logo"><img src="<?=BASE ?>images/logo3.png" alt=""></div>
    <form action="recherche.php" method="get">
      <input type="search" name="recherche" id="recherche" maxlength="200" placeholder="Recherche ...">
      <input type="image" src="<?=BASE ?>images/loupe.png" alt="Rechercher" id="loupe">
    </form>
  </header>