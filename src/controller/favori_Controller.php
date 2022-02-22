<?php
function favoris(){
 
    setcookie("favoris",time() + 60*60*24*30) ;//cree un cookie?????
     isset($_COOKIE["favoris"]);


    

    $id_annonce = $_POST['id'];// on recuperer l'identifiant de l'annonce selectionné
// recuperer  l entité article et une ligne de panier
    include __DIR__.'/../entity/Annonce.php';
    include __DIR__.'/../entity/row_favoris.php';





  if (isset($_COOKIE['favoris'])) {

    // Je recupere le cookie
    $my_favoris_string=$_COOKIE['favoris'];
    //je convertie en objet panier
    $myFavoris=json_decode( $my_favoris_string); 
} else {

    // il faut construire ensuite le panier complet
    // on prend le cas ou le panier est vide car pas de cookies
    $myFavoris = new Annonce();
    $myFavoris->row_favoris = [];
   
 }


     $row_favoris = new row_favoris();
     $row_favoris->annonce= Annonce::retrieveByPK($_POST['id']);
 
include __DIR__.'/../../template/Viewfavoris.php';
}
