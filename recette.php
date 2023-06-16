<?php
  // Array recettes
  require_once('libraries/recipe.php');
  // Inclure Tools 
  require_once('libraries/tools.php');
  // Inclure Header
  require_once('templates/header.php');
  

  $id = (int)$_GET['id'];

 //we call the function to get the recipe
  $recipe = getRecipeById($pdo, $id);
  

//Pour conventir l'information en tableau
if ($recipe) {
  $ingredients = linesToArray($recipe['ingredients']);
  $instructions = linesToArray($recipe['instructions']);

  ?>
      
      <!--  HERO -->
  
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <!-- Insertion de code pour dynamiser l'image -->
      <img src="<?=getRecipeImage($recipe['image']); ?>" class="d-block mx-lg-auto img-fluid" alt="<?=$recipe['image']?>" loading="lazy" width="700" height="500">
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
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">>
      <h2>Instructions</h2>
      <ol class="list-group">
        <?php foreach($instructions as $key=> $instruction) {?>
          <li class="list-group-item"><?= $instruction;?></li>
        <?php } ?>
      </ol>
    </div>  
    
    <?php } else { ?>
      <div class="row text-center">
        <h1>Recette introuvable</h1>
      </div>
    <?php } ?>
      <!-- FOOTER -->
      <?php 
      require_once('templates/footer.php'); 
      ?>
  
