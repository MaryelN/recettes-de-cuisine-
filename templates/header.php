<?php
// Pour connecter la constante
  require_once('libraries/config.php');
//Pour recuperer le nom du script de page 
  $currentPage = basename($_SERVER['SCRIPT_NAME']);
  
// Liasson en dur
//if statement pour donner la classe active
  // if($currentPage === 'index.php'){ echo'Active';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de Recettes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/override-bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none col-md-3 mb-2 mb-md-0">
          <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="logo Cuisinea" width="250">
        </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
        <!-- Boucle pour parcourire notre tableau mainMenu et display les valeurs dans le liste -->
        <?php foreach ($mainMenu as $key => $menu) { ?>
          <li><a href="<?=$key;?>" class="nav-link px-2 <?php if ($currentPage === $key) { echo 'active'; } ?>"><?=$menu;?></a></li>
        <?php } ?>
        
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>

    <main class="container col-xxl-8 px-4 py-5">>