<?php include "header.php"; ?>
    <h1>Liste des annonces</h1>
    <br />
    <br />
    <?php foreach ($entry as $monannonce ) { ?>

          <div class="article">
                  <div class="card">
                       <img class="card-img-top"  src="http://localhost:3000/img/<?=$monannonce->image ?>" alt="Card image cap">
                              <div class="card-body">
                                        <h3 class="card-title">Titre : <?=$monannonce->titre ?></h3>
                                         <p class="card-text"><?=$monannonce->message ?></p>
                                        
              <form method="POST" action="/favoris">
                         <input type="hidden" value="<?=$monannonce->id ?>" name="id">
                          <input type="submit" value="Ajouter au favoris">
                </form>
    
          </div>
            </div>
            </div>
            

    <?php } ?>


    <?php include "footer.php"; ?>