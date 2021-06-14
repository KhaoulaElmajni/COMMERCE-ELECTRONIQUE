<?php

$commande = new CommandeController();
foreach($_SESSION as $name => $product){
    if(substr($name,0,9) == "products_"){
       $data = array(
        "fullname" => $_SESSION["username"],
        "product" => $product["title"],
        "qte" => $product["qte"],
        "price" => $product["prix"],
        "total" => $product["total"]
       );
       $commande->addCommande($data);
    }else{
        Redirect::to("home");
    }
}