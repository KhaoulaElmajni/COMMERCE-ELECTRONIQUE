<?php
include("./views/includes/navbar.php"); 
    $data = new ProductsController();
    $product = $data->getProduct();
    
?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10 mb-2">
                    <div class="card h-100 bg-white rounded p-2">
                        <div class="car-header bg-light">
                            <h3 class="card title m-2 text-center p-2">
                                <?php
                                    echo $product->nom_p;
                                ?>
                            </h3>
                        </div>
                        <div class="card-img-top">
                            <img width="100%" src=" <?php
                                    echo $product->image_p ;
                                    ?>" alt="" class="img-fluid rounded">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?php 
                                        echo $product->description_p;
                                ?>
                            </p>
                        </div>

                        <div class="card-footer">
                        <span class="badge bg-info text-white">
                            <p>
                                <?php 
                                        echo $product->prix_p;
                                ?> MAD
                            </p>
                            </span>
                            
                            <span class="badge bg-dark text-white">
                                <p>
                                    <strike>
                                        <?php 
                                            echo $product->prix_p +500;
                                        ?> MAD
                                    </strike>
                                </p>
                            </span>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <h4 class="text-primary m-3 text-center">
                    Quantité souhaité :
            </h4>
            <form method="post" action="<?php echo BASE_URL;?>checkout">
                <div class="form-group">
                    <input type="number" name="product_qte" id="product_qte" class="form-control" value="1">
                    <input type="hidden" name="product_title" value="<?php echo $product->nom_p;?>">
                    <input type="hidden" name="product_id" value="<?php echo $product->id_p;?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Ajouter au panier">
                </div>
            </form>
        </div>
    </div>
</div>
