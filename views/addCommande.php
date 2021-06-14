<?php

$commande = new CommandeController();

foreach($_SESSION as $nom => $product){
    if(substr($nom,0,9) == "products_"){
        $data = array(
            "nom_com" => "khaoula",
            "produit_com" => $product["title"],
            "qte_com" => $product["qte"],
            "prix_com" => $product["prix"],
            "total_com" => $product["total"] 
        );
        $commande->addCommande($data);
    }else{
       Redirect::to("home");
    }
}