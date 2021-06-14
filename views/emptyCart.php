<?php 
foreach($_SESSION as $nom =>$product){
    if(substr($nom,0,9) == "products_"){
        unset($_SESSION[$nom]);
        unset($_SESSION["totaux"]);
        unset($_SESSION["count"]);
        Redirect::to("cart");
    }
}

?>



                    