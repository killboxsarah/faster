<?php 

function get_list_view_html($product_id, $product) {
    
    $output = "";

    $output = $output . "<div class='large-6 small-6 columns'>";
    $output = $output . "<ul class='panel frame pricinleft-side'>";    
    $output = $output . '<a href="wheels.php">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "</a>";
    $output = $output . "</div>";

    return $output;
};


$singleproducts = array();
$singleproducts[101] = array(
  "name" => "Red&White FlyWheel",
  "fname" => "Red&White FlyWheel",
  "img" => "images/red_cement.jpg",
  "price" => 125,
  "details" => "Faster introduces the FlyWheel, our lightest wheel to date. 
  FlyWheels offer an innovative 'pitch perfect' hub engineered for optimal  strength and turning radius.  
  The FlyWheel's hub accentuates Faster's trademark dual-durometer urethane to hold the tightest curve 
  - or easily release for smooth brake and slide.
  
        <br><br>
        <b>59</b><br>
        Set of 8 Wheels<br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 92a | 96a,
        <br><br>
        <b>Skinny</b><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 92a | 96a",

      "paypal" => 'form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="LWHW5K5GCG78N">
      <input type="hidden" name="on0" value="Height/Profile">Height/Profile</td></tr><tr><td><select name="os0">
        <option value="59mm Bevel">59mm Bevel $125.00 USD</option>
      </select> 
      <input type="hidden" name="currency_code" value="USD">
      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>'
        );

$singleproducts[102] = array(
  "name" => "Purple&White FlyWheel",
  "fname" => "Purple&White FlyWheel",
  "img" => "images/purple_cement.jpg",
  "price" => 125,
  "details" => "Faster introduces the FlyWheel, our lightest wheel to date. 
  FlyWheels offer an innovative 'pitch perfect' hub engineered for optimal  strength and turning radius.  
  The FlyWheel's hub accentuates Faster's trademark dual-durometer urethane to hold the tightest curve 
  - or easily release for smooth brake and slide.
        <br><br>
        <b>59</b><br>
        Set of 8 Wheels<br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a,
        <br><br>
        <b>Skinny</b><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a",

        "paypal" => '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="RK9PRNTE8MJ7E">
        <input type="hidden" name="on0" value="Height/Profile">Height/Profile</td></tr><tr><td><select name="os0">
            <option value="62mm Skinny">62mm Skinny $125.00 USD</option>
            <option value="59mm Bevel">59mm Bevel $125.00 USD</option>
        </select> 
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>'

        );

$singleproducts[103] = array(
  "name" => "Blue&White FlyWheel",
  "fname" => "Blue&White FlyWheel",
  "img" => "images/blue.jpg",
  "price" => 125,
  "details" => "Faster introduces the FlyWheel, our lightest wheel to date. 
  FlyWheels offer an innovative 'pitch perfect' hub engineered for optimal  strength and turning radius.  
  The FlyWheel's hub accentuates Faster's trademark dual-durometer urethane to hold the tightest curve 
  - or easily release for smooth brake and slide.
        <br><br>
        <b>59</b><br>
        Set of 8 Wheels<br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 88a | 92a,
        <br><br>
        <b>Skinny</b><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a",

        "paypal" => '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target"_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="H6VD924LXCQS2">
          <option value="Skinny (8)">Skinny (8) $125.00 USD</option>
          <option value="59mm (8)">59mm (8) $125.00 USD</option>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>'

        );

$singleproducts[104] = array(
  "name" => "FlyWheels",
  "fname" => "FlyWheels",
  "img" => "images/FlyWheel.jpg",
    "price" => 125,
  "details" => "Faster introduces the FlyWheel, our lightest wheel to date. 
  FlyWheels offer an innovative 'pitch perfect' hub engineered for optimal  strength and turning radius.  
  The FlyWheel's hub accentuates Faster's trademark dual-durometer urethane to hold the tightest curve 
  - or easily release for smooth brake and slide."
      

        );

?>