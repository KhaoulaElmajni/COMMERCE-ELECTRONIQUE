<?php
include("./views/includes/navbar.php"); 
    $categories = new CategoriesController();
    $categories = $categories->getAllCategories();

    if(isset($_POST['id_cat'])){
        $products = new ProductsController();
        $products = $products->getProductsByCategory($_POST['id_cat']);
       
    }else{
        
    $data = new ProductsController();
    $products = $data->getAllProducts();
    }
    
?>






<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">SITE E-COMMERCE ONLINE</h1>
        <p class="lead text-muted mb-1">Bonjour chers visiteurs veuillez s'amuser en naviguant et trouver vos meilleurs opportunités : les meilleurs produits &amp; les meilleurs prix</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/03/13/17/26/ecommerce-2140603__340.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2018/08/29/17/07/ecommerce-3640321__340.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://lorempixel.com/855/365/" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-header bg-success text-white text-uppercase">
                    <i class="fa fa-heart"></i> Top produit
                </div>
                <img class="img-fluid border-0" src="http://img.bbystatic.com/BestBuy_US/images/products/1582/1582884_sa.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title text-center"><a href="product.html" title="View Product">Product title</a></h4>
                    <div class="row">
                        <div class="col">
                            <p class="btn btn-danger btn-block">99.00 MAD</p>
                        </div>
                        <div class="col">
                            <a href="product.html" class="btn btn-success btn-block">Afficher</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
            <div class="card-header bg-primary text-white text-uppercase">
                    <i class="fa fa-star"></i> Nos derniers produits
                </div>
                <br>
                <?php
                    if(count($products) > 0) : 
                ?>
                <?php
                    foreach($products as $product) :
                ?>
                <br>
                <div class="col-md-6 mb-2">
                    <div class="card h-100 bg-white rounded p-2">
                        <div class="car-header bg-light">
                        <form id="form" method="post" action="<?php echo BASE_URL;?>show">
                            
                                <input type="hidden" name="product_id" id="product_id">
                           
                        </form>
                            <h3 onClick="submitForm(<?php echo $product["id_p"];?>)" class="card title m-2 text-center p-2">
                                <?php
                                    echo $product['nom_p'];
                                ?>
                            </h3>
                        </div>
                        <div class="card-img-top">
                            <img src=" <?php
                                    echo $product['image_p'];
                                    ?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?php 
                                        echo $product['description_p'];
                                ?>
                            </p>
                        </div>

                        <div class="card-footer">
                        <span class="badge bg-primary text-white">
                            <p>
                                <?php 
                                        echo $product['prix_p'];
                                ?> MAD
                            </p>
                            </span>
                            
                            <span class="badge bg-danger text-white">
                                <p>
                                    <strike>
                                        <?php 
                                            echo $product['prix_p']+500;
                                        ?> MAD
                                    </strike>
                                </p>
                            </span>
                            <span>
                                    <a href="cart.html" class="btn btn-success btn-block">Add to cart</a>
                                
                            </span>
                        </div>
                        

                    </div>
                </div>
                    
                <?php
                    endforeach; 
                ?>
                <?php
                    else:
                ?>
                <div class="alert alert-info"> Aucun produit avec cette catégorie pour l'intant !!!</div>
                <?php
                    endif; 
                ?>
            </div>
        </div> 
        <div class="col-md-4">
            <h4 class="text-primary m-3 text-center">
                    Catégorie
            </h4>
            <ul class="list-group">
                <?php
                    foreach($categories as $category) :
                ?>
                
                <li  class="list-group-item text-center" >
                        <form method="post" id="catProd" action="<?php echo BASE_URL; ?>">
                            <input type="hidden" name="id_cat" id="id_cat">
                            
                        </form>
                   <a onClick="getCatProducts(<?php echo $category['id_cat']; ?>)" class="btn btn-link" style="text-decoration:none; font-size:20px;cursor:pointer;">
                   <b>
                    <?php 
                        echo $category['nom_cat'];
                    ?>
                   
                    (<?php 
                         $productsByCategory = new ProductsController();
                         $productsByCategory = $productsByCategory->getProductsByCategory($category['id_cat']);
                        echo count($productsByCategory);
                    ?>)
                   </b>
                   </a>
                   
                </li>
                
                <?php
                    endforeach; 
                ?>
            </ul>
        </div>
    </div>
</div>
