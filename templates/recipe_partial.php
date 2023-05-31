<div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <!-- Pour utiliser la constante avec notre boucle foreach -->
              <img src="<?=_RECIPES_IMG_PATH_.$recipe['image']?>" class="card-img-top" alt="image de <?=$recipe['title']?>">
              <div class="card-body">
                <!-- Pour faire un echo directement dans la ligne HTML -->

                <h5 class="card-title"><?=$recipe['title']?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>