<?php
try{
$pdo = new PDO( "mysql:host=localhost:3307;dbname=boutique","root","");

$content = file_get_contents('./products.json');

$initial_products = json_decode($content);

//$products = array_map('map', $initial_products);

foreach((array)$initial_products as $product){
        $id_p = $products->sku . rand(1000000000, 199999999999);
        $nom_p = $products->name;
        $description_p = $products->description;
        $prix_p = $products->price;
        $image_p = $products->image;
    $sql = "INSERT INTO produit VALUES(:id_p,:nom_p,:description_p,:prix_p,:image_p)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id_p' => $id_p,
        'nom_p' => $nom_p,
        'description_p' => $description_p,
        'prix_p' => $prix_p,
        'image_p'=> $image_p
    ]);
}

echo "done";
}
catch(PDOException $e){
    echo $e->getMessage();
}