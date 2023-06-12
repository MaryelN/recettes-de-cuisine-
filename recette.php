<?php
  // Array recettes
  require_once('libraries/recipe.php');
  // Inclure Tools 
  require_once('libraries/tools.php');
  // Inclure Header
  require_once('templates/header.php');
  
  // constant pour connecter avec la base de données et lier les id's
  $pdo = new PDO('mysql:dbname=studi_live_cuisinea;host=localhost;charset=utf8mb4', 'root', '');

  $id = (int)$_GET['id'];

 //we call the function to get the recipe
  $recipe = getRecipeById($pdo, $id);
  

  if ($recipe['image'] === null) {
    $imagePath = _ASSETS_IMG_PATH_.'recipe_default.jpg';
  } else {
      $imagePath = _RECIPES_IMG_PATH_.$recipe['image'];
  }
//Pour conventir l'information en tableau
  $ingredients = linesToArray($recipe['ingredients']);


  ?>
      
      <!--  HERO -->
  
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <!-- Insertion de code pour dynamiser l'image -->
      <img src="<?=$imagePath; ?>" class="d-block mx-lg-auto img-fluid" alt="<?=$recipe['image']?>" loading="lazy" width="700" height="500">
    </div>
    <div class="col-lg-6">
      <!-- Insertion de code pour dynamiser le titre -->
      <h1 class="display-5 fw-bold  lh-1 mb-3"><?= $recipe['title'] ?></h1>
      <p class="lead"><?= $recipe['description'] ?></p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
      </div>
    </div>
    </div>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">>
      <h2>Ingrédients</h2>
      <ul class="list-group">
        <?php foreach($ingredients as $key=> $ingredient) {?>
          <li class="list-group-item"><?= $ingredient;?></li>
        <?php } ?>
      </ul>
    </div>
          
      <!-- FOOTER -->
      <?php 
      require_once('templates/footer.php'); 
      ?>
  
