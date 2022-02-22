<?php

function afficher_ajout_annonce(){
    // affiche une vue
    include __DIR__.'/../../template/ViewAddAnnonce.php';
}

function   enregistrer_annonce(){


if(isset($_FILES['image'])){
    $tmpName = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];

    move_uploaded_file($tmpName, $_SERVER["DOCUMENT_ROOT"]."/img/".$name);// stoker l'image dans dossier /imag

}


    // recuperer  l entité article
    include __DIR__.'/../entity/Annonce.php';
    
    $entry = new Annonce;
    $entry->titre = $_POST['titre'];
    $entry->message= $_POST['message'];
    $entry->image = $name;//nom de l'images
    $entry->save();

    include __DIR__.'/../../template/ViewAddAnnonce.php';
}