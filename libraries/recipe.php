<?php
$recipes = [
    ['title'=> 'Mousse au chocolat', 
    'description' => "Mousse and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins", 
    'image' => "1-chocolate-au-mousse.jpg"],
    ['title'=> 'Gratin Dauphinois', 
    'description' => "Gratin and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins", 
    'image' => "2-gratin-dauphinois.jpg"],
    ['title'=> 'Salade fresh', 
    'description' => "Salade and customize responsive mobile-first sites with Bootstrap, the world's most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins", 
    'image' => "3-salade.jpg"],
  ];
/**
 *Get the recipe from the PDO
 *
 * @param PDO $pdo
 * @param integer $id
 * @return 
 */
  function getRecipeById(PDO $pdo,int $id) {

    $query = $pdo ->prepare("SELECT * FROM recipes WHERE id = :id");
    //Pour donner la valeur de $id = :id avec le typage int
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
  }