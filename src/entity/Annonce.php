<?php
// Connexion à la B.D
include __DIR__.'/../../vendor/SimpleOrm.class.php';

class Annonce extends SimpleOrm {
    public $id;
    public $titre;
    public $message;
    public $image;
}