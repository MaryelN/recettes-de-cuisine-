<?php

  $recipes = [
    ['title'=> 'Mousse au chocolat', 
    'description' => "Quickly design and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins", 
    'image' => "1-chocolate-au-mousse.jpg"],
    ['title'=> 'Gratin Dauphinois', 
    'description' => "Quickly design and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins", 
    'image' => "2-gratin-dauphinois.jpg"],
    ['title'=> 'Salade fresh', 
    'description' => "Quickly design and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins", 
    'image' => "3-salade.jpg"],
  ];
    //  HEADER
    require_once('templates/header.php');
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
  
