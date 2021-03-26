<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="../css/productPage.css" media="screen"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<?php
include '../templates/top.html'; 
include '../database/query.php';
$getData = htmlspecialchars($_GET["product"]);
$con = getDbConnection();
$products = getSpecificProduct($con, $getData);

session_start();

foreach($products as $item){
?>

<body>
<div class="container-fluid">
    <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
					<div class="product col-md-3 service-image-left">
							<img class="img-responsive img-fluid" src="../img/<?php echo $item['foto']; ?>" alt=""></img>
					</div>
					
				</div>
					
				<div class="col-md-7">
					<div class="product-title"><?php echo $item["product"] ?></div>
					<!--<div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>-->
					<hr>
					<div class="product-price"><?php echo "€".$item["prijs"] ?></div>
					<div class="product-stock">In Stock</div>
					<hr>
					<div class="btn-group cart">
						<button type="submit" id="button" class="btn btn-success">
							Add to cart 
						</button>
						<script>
							if(document.getElementById('button').clicked == true)
							{
						<?php
							$cartItem = array($item['product'], $item["omschrijving"], $item['prijs'], $item['foto'], $item['id']);
							$_SESSION["Cart"][$item['id']] = $cartItem;
						?>
						</script>
					</div>
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
						
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								<p><?php echo $item["omschrijving"]; ?></p>
							</section>
										  
						</div>
					<div class="tab-pane fade" id="service-two">
						
						<section class="container">
								
						</section>
						
					</div>
					<div class="tab-pane fade" id="service-three">
												
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>
<?php }?>
</body>
