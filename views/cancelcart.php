<?php

$id = $_POST["product_id"];
$price = $_POST["product_price"];
$data = new ProductsController();
$data->emptyCart($id,$prix);

