<?php
include("./views/includes/navbar.php"); 
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto bg-white mt-2" >
            <table class="table table-stripped">
                <thead>
                    <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Action</th>
                    </tr> 
                </thead>
                <tbody>
                <?php foreach($_SESSION as $nom =>$product): ?>
                <?php if(substr($nom,0,9) == "products_"): ?>
                    <tr>
                    <td><?php echo $product["title"]; ?></td>
                    <td><?php echo $product["prix"]; ?></td>
                    <td><?php echo $product["qte"]; ?></td>
                    <td><?php echo $product["total"]; ?> MAD</td>
                    <td>
                        <form method="post" action="<?php echo BASE_URL;?>cancelcart">
                            <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
                            <input type="hidden" name="product_price" value="<?php echo $product["prix"];?>">
                            <button type="submit" class="btn btn-sm btn-danger text-white font-weight-bold p-2"> 
                            <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    
                </tbody>
            </table>
              <?php if(isset($_SESSION["count"]) && $_SESSION["count"]>0 && isset($_SESSION["logged"])):?>
                  <div id="paypal-button-container"></div>
              <?php elseif(isset($_SESSION["count"]) && $_SESSION["count"]>0): ?>
              <a href="<?php echo BASE_URL; ?>login" class="btn btn-link">Connectez vous pour terminer vos achats </a>
              <?php endif; ?>
        </div> 
        <div class="col-4 col-md-4 float-right bg-white mt-4">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Produits</th>
                            <td>
                                <?php echo isset($_SESSION["count"]) ? $_SESSION["count"] : 0;?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Total TTC</th>
                            <td>
                                    <strong id="amount" data-amount="<?php echo $_SESSION["totaux"];?>">
                                        <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0;?> MAD
                                    </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                <form method="post" action="<?php echo BASE_URL;?>emptyCart">
                  <button type="submit" class="btn btn-primary"> 
                        Annuler l'achat
                    </button>
                </form>
                <form method="post" id="addCommande" action="<?php echo BASE_URL;?>addCommande"></form>
            <?php endif; ?>
           </div>
            
    </div>
</div>


<script>
  let amount = document.querySelector('#amount').dataset.amount;
  let finalAmount = Math.floor(amount / 9.86);
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: finalAmount.toString()
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Votre Commande a effectuée par ' + details.payer.name.given_name);
        document.querySelector("#addCommande").submit();
      });
    } 
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>