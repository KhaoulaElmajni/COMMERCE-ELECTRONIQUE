<?php

if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true){
    Redirect::to("home");
}
if(isset($_POST["submit"])){
    $createUser = new UsersController();
    $createUser->register();
}

?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Inscrire
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1 mx-auto">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" required placeholder="username">
                        </div>
                        <br>
                        <div class="form-group  mx-auto">
                            <input type="email" class="form-control" name="email" required placeholder="email">
                        </div>
                        <br>
                        <div class="form-group  mx-auto">
                            <input type="password" class="form-control" name="password" required placeholder="mot de passe">
                        </div>
                        <br>
                        <div class="form-group  mx-auto">
                            <button name="submit" class="btn btn-primary">
                            Inscrire
                            </button>
                        </div>
                    </form>
                </div>
                <div class="car-footer">
                    <a href="<?php echo BASE_URL; ?>login" class="btn btn-link">
                    Connecter
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>