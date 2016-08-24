<?php 
$pagetitle = "Apparel"; 
include('inc/header.php'); 
include ("inc/apparels.php"); 
$product_id = $_GET["id"];
$product = $apparels[$product_id];

?>

 <div class="row">
    <div class="large-12 small-12 columns">
	<div class ="panel landings" style="opacity:1;">
		<div class="section page">
			<div class="breadcrumb"><a href="index" style="color:#662e91;">Detroit Skate Factory</a>
				<br><br>

					<div class = "large-6 small-12 columns">
					<ul class="panel frame pricing-table left-side">
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
						</ul>
					</div>
					    <div class="large-6 columns">
					      <ul class="pricing-table right-side">
					        <li class="title">
					            <div id="product-description" class="rte" itemprop="description">
									<h3><?php echo $product["name"]; ?></h3>
					            </div>
					        </li>
					        <li class="price">$<?php echo $product["price"]; ?> USD
					        </li>
					        <li class="description"><?php echo $product["details"]; ?>
					        <br>
					        <br>
					        <?php echo $product["paypal"]; ?>
					        </a></li>
					      </ul>						
					  </div>              
		</div>
	</div>
</div>
<hr>
<?php
include('inc/footer.php'); ?>




