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
}


$singleproducts[102] = array(
  "name" => "Demiblue",
  "fname" => "Demilune",
  "img" => "images/demiblue.jpg",
  "price" => 125.5,
  "details" => "Faster's Vanguard dual-durometer urethane is now available in a lightweight single-component wheel. 
                Experience Faster's signature responsiveness on a polyurethane hub designed for strength and pitch.
        <br><br>
        <b>59</b><br>
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

        "paypal" => '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="H6VD924LXCQS2">
        <input type="hidden" name="on0" value="Profile">Profile</td></tr><tr><td><select name="os0">
            <option value="Skinny (8)">Skinny (8) $125.50 USD</option>
            <option value="59mm (8)">59mm (8) $125.50 USD</option>
        </select> 
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>'

        );

?>