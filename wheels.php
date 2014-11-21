<?php include ("inc/products.php"); ?>
<?php 
$pagetitle = "Wheels"; 
$section = "Wheels";
include('inc/header.php'); 
?>



<div class="landing" style="margin-top:-19%;">
  <img src="images/59_banner.jpg">  
</div>

  <div class="row">
    <div class="large-12 columns">
      <div class="panel about full-height" style="opacity:1;">
        <div class="breadcrumb"><a href="index.php" style="color:#662e91;">Faster </a> &gt; <?php echo $pagetitle; ?></div>
      
          <p class="detail" style="color:#808285;">OUR <span class="name">PRODUCTS</span> </p>
                <?php foreach($products as $product_id=> $product) { 
                  echo '<a href="wheel?id=' . $product_id . '">';
                    echo "
                      <div class='large-4 columns'>
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
