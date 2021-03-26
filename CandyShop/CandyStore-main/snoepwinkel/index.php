<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="background">

<?php include 'templates/top.html'; ?>
    
    <?php include 'database/query.php';
    $con = getDbConnection();
    $products = getProduct($con);
    foreach($products as $item){
?>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $item['product']; ?></div>
        <div class="panel-body"><img src="img/<?php echo $item['foto']; ?>"class="img-responsive img-fluid center-block" style="max-height: 190px; width: auto;" alt="Image"></div>
        <div class="panel-footer"><?php echo substr($item['omschrijving'], 0 , 35) . "..."; ?><div class="pull-right mb-2"><?php echo "<a href='pages/productPage.php?product=".$item['id']."'><button type='button' class='btn btn-primary btn-sm'>Info</button></a>"; ?></div></div>
      </div>
    </div>
    <?php
  } ?>
<div class="container">    

</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
