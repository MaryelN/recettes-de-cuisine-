<?php
  //Array recettes
  require_once('libraries/recipe.php');
  // Inclure Header
  require_once('templates/header.php');

  $recipes = getRecipes($pdo);

  ?>
      
      <!-- MAIN HERO -->
      
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <h1>Liste des recettes</h1>
      </div>

      <!-- CARDS --> 
      <div class="row" >

      <!-- Nous inserons le code PHP directement dans les lignes du HTML pour creer nos cartes avec foreach -->
      <?php foreach($recipes as $key => $recipe) {
        include('templates/recipe_partial.php');
      } ?>
          
        </div>
          
      <!-- FOOTER -->
      <?php 
      require_once('templates/footer.php'); 
      ?>
  
