<?php include ("inc/singleproducts.php"); ?>
<?php 
$pagetitle = "Single Component Wheels"; 
$section = "Wheels";
include('inc/header.php'); 
?>



<div class="landing" style="margin-top:-19%;">
  <img src="images/flywheel_promo.jpg">  
</div>

  <div class="row">
    <div class="large-12 columns">
      <div class="panel about full-height" style="opacity:1;">
        <div class="breadcrumb"><a href="index" style="color:#662e91;">Detroit Skate Factory </a></div>
      
          <p class="detail" style="color:#808285;">OUR <span class="name">PRODUCTS</span> </p>
                <?php foreach($singleproducts as $product_id=> $product) { 
                  echo '<a href="singlecomponent?id=' . $product_id . '">';
                    echo "
                      <div class='large-6 columns'>
                        <ul class='pricing-table right-side'>"; ?>
                        <?php echo '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">'; ?>

                        <div class="price">
                       <?php echo $product["fname"]; ?>
                       </div> 
              <?php echo '</ul>';
                    echo '</div>';

                    echo "</a>";
                    echo "</li>";
                  }?>
          </div>
      </div>
    </div>

  <?php
include('inc/footer.php'); ?>
