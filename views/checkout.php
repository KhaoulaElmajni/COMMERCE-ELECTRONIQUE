<?php
 
    if(isset($_POST["product_id"])){
        $id = $_POST["product_id"];
        $data = new ProductsController();
        $product = $data->getProduct();
        if($_SESSION["products_".$id]["title"] === $_POST["product_title"]){
            //header('location:cart.php');
            Session::set("info","Vous avez déjà ajouté ce produit à votre panier!");
            Redirect::to("cart");
            
        }else{
            if($product->qte_p < $_POST["product_qte"]){
                Session::set("info","La quantité disponible au stock est : $product->qte_p");
                Redirect::to("cart"); 
            }else{
                $_SESSION["products_".$product->id_p] = array(
                    "id" => $product->id_p,
                    "title" => $product->nom_p,
                    "prix" => $product->prix_p,
                    "qte" => $_POST["product_qte"],
                    "total" =>$product->prix_p * $_POST["product_qte"]
                );

                $_SESSION["totaux"] += $_SESSION["products_".$product->id_p]["total"];
                $_SESSION["count"] += 1; 
                Redirect::to("cart");
            }
        }
    }?>