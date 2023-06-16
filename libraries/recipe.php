<?php

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
    return $query->fetch(PDO::FETCH_ASSOC);
  }

/**
 * return le chemin d'image ou une default
 *
 * @param string $image
 * @return
 */
  function getRecipeImage(string|null $image) {
      if ($image === null) {
      return _ASSETS_IMG_PATH_.'recipe_default.jpg';
    } else {
        return _RECIPES_IMG_PATH_.$image;
    }
  }

  /**
   * recuperer notre tableau de recettes avec un limit
   *
   * @param PDO $pdo
   * @param integer|null $limit
   * @return 
   */
  function getRecipes(PDO $pdo, int $limit = null) {
    $sql = 'SELECT * FROM recipes ORDER BY RAND() DESC';
  
    if ($limit) {
      $sql .= ' LIMIT :limit';
    }
  
    $query = $pdo->prepare($sql);
  
    if ($limit) {
      $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    }
  
    $query->execute();
    return $query->fetchAll();
  }