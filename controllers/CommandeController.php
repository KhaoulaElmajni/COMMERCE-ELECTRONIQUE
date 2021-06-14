<?php

class CommandeController{

    public function getAllCommandes(){
        $commandes = Commande::getAll();
        return $commandes;
    }

    public function addCommande($data){
        $result = Commande::CreateCommande($data);
        if($result === "1"){
            foreach($_SESSION as $nom => $product){
                if(substr($nom,0,9) == "products_"){
                    unset($_SESSION[$nom]);
                    unset($_SESSION["count"]);
                    unset($_SESSION["totaux"]);
                }
            }
            Session::set("success","Votre Commande a effectuée");
            Redirect::to("home");
        }
    }
}
