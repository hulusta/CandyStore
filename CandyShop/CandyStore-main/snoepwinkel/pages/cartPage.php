<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/cartPage.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<?php
include '../templates/top.html'; 
include '../database/query.php';
$con = getDbConnection();
session_start();
$cartItems = $_SESSION["Cart"];

?>
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
								<!--<a href="http://localhost:8888/CandyShop/CandyStore-main/snoepwinkel"></a>-->
									<span class="glyphicon glyphicon-share-alt"></span> Continue shopping 
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?php foreach($cartItems as $item){ ?>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="../img/<?php echo $item[3]; ?>">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong><?php echo $item[0]; ?></strong></h4><h4><small><?php echo substr($item[1], 0 , 70)."..."; ?></small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong><?php echo $item[2]; ?> <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
				<?php 
				} ?>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Added items?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total: <strong></strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" id="cartButton" class="btn btn-success btn-block">
								Checkout
							</button>
							<script>
							if(document.getElementById('cartButton').clicked == true)
							{
						<?php
							foreach($cartItems as $item){
								$product = $item[0];
								$prijs = $item[2];
								
								injectTransaction($con, $product, $prijs);
							}
							unset($_SESSION['Cart']);
							//$cartItem = array($item['product'], $item["omschrijving"], $item['prijs'], $item['foto']);
							//$_SESSION["Cart"][$item['id']]= $cartItem;
						?>
						</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>