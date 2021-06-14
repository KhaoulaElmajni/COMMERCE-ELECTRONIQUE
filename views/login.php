<?php

if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
    Redirect::to("home");
}
    $loginUser = new UsersController();
    $loginUser->auth();


?>


<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Connexion
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1">
                        
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" required placeholder="email">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" required placeholder="mot de passe">
                        </div>
                        <br>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary">
                            Connecter
                            </button>
                        </div>
                    </form>
                </div>
                <div class="car-footer">
                    <a href="<?php echo BASE_URL; ?>register" class="btn btn-link">
                    Inscrire
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>