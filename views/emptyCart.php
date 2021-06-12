<?php 
foreach($_SESSION as $nom =>$product){
    if(substr($nom,0,9) == "products_"){
        unset($_SESSION[$nom]);
        unset($_SESSION["count"]);
        unset($_SESSION["totaux"]);
        Redirect::to("cart");
    }
}

?>



                    