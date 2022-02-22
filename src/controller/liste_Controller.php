<?php


// recuperer  l entité article
include __DIR__.'/../entity/Annonce.php';

// GET ALL ARTICLES
$entry = Annonce::all();


// affiche une vue
include __DIR__.'/../../template/ViewListe.php';
