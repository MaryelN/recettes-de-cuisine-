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



    <div class="container col-xxl-8 px-4 py-5">
      
      <!-- MAIN HERO -->
      
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Cuisinea" loading="lazy" width="350">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold  lh-1 mb-3">Cuisinea - Recettes de Cuisine</h1>
          <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
          </div>
        </div>
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
  

</body>
</html>