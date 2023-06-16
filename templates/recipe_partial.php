<div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <!-- Pour utiliser la constante avec notre boucle foreach -->
              <img src="<?=getRecipeImage($recipe['image']);?>" class="card-img-top" alt="image de <?=$recipe['title'];?>">
              <div class="card-body">
                <h5 class="card-title"><?=$recipe['title'];?></h5>
                <p class="card-text"><?=$recipe['description'];?></p>
                <!-- On done un id a notre href avec le $key de notre tableau -->
                <a href="/recette.php?id=<?=$recipe['id']; ?>" class="btn btn-primary">Lire recette</a>
              </div>
            </div>
          </div>