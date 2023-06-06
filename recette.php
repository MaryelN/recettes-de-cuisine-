<?php
  // Array recettes
  require_once('libraries/recipe.php');
  // Inclure Header
  require_once('templates/header.php');
  // constant pour recuperer les elements par "id" de notre tableau
  $id = $_GET['id'];

  ?>
      
      <!--  HERO -->
  
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <!-- Insertion de code pour dynamiser l'image -->
      <img src="<?=_RECIPES_IMG_PATH_.$recipes[$id]['image'] ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
    </div>
    <div class="col-lg-6">
      <!-- Insertion de code pour dynamiser le titre -->
      <h1 class="display-5 fw-bold  lh-1 mb-3"><?= $recipes[$id]['title'] ?></h1>
      <p class="lead"><?= $recipes[$id]['description'] ?></p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
      </div>
    </div>
    </div>
  
        </div>
          
      <!-- FOOTER -->
      <?php 
      require_once('templates/footer.php'); 
      ?>
  
