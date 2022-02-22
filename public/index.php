<?php


if (isset($_SERVER['PATH_INFO'])==false   ||  ($_SERVER['PATH_INFO']=="/")      ){

   include __DIR__.'/../src/controller/AcceuilController.php';

}

else if ($_SERVER['PATH_INFO']=="/add_annonce"){
   
    include __DIR__.'/../src/controller/Add_Controller.php';
    afficher_ajout_annonce();
}
else if ($_SERVER['PATH_INFO']=="/enregistrer_annonce"){
   
    include __DIR__.'/../src/controller/Add_Controller.php';
    enregistrer_annonce();
}

else if ($_SERVER['PATH_INFO']=="/liste"){
   
    include __DIR__.'/../src/controller/liste_Controller.php';
 
}

else if ($_SERVER['PATH_INFO']=="/favoris"){
   
    include __DIR__.'/../src/controller/favori_Controller.php';
    favoris();
}
else {
    echo "page d erreur";
}
?>