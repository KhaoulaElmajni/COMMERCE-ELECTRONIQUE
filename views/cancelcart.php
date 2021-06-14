<?php

$id = $_POST["product_id"];
$prix = $_POST["product_price"];
$data = new ProductsController();
$data->emptyCart($id,$prix);

