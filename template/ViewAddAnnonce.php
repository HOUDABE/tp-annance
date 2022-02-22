<?php include "header.php"; ?>
<h1>Add annonces</h1>


<form enctype="multipart/form-data" method="POST" action="/enregistrer_annonce">
        <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
        <input type="text" name="titre"  class="form-control-plaintext" id="staticEmail"  >
        </div>
    </div>
   
            <span class="input-group-text">message</span>
            <textarea name="message" class="form-control" aria-label="message"></textarea>
           
 
    <input type="file" name="image" id="fileUpload"> 
       <button class="btn btn-primary" type="submit">Ajouté une nouvelle annonce</button>

    </form>
<?php include "footer.php"; ?>
