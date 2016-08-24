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


$apparels = array();
$apparels[101] = array(
  "name" => "SMPLFD Tiger Tee",
  "fname" => "NEO TIGER",
  "img" => "images/tiger.png",
  "price" => 25,
  "details" => "2-color Neo-Tiger Detroit print by SMPLFD features navy and orange ink hand-screened onto an extremely soft heather grey tri-blend crewneck sweatshirt. Warm, yet light and comfortable crewneck; perfect for the cool nights at the ballpark.",

      "paypal" =>'<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="XPS8PMBETUP6J">
<input type="hidden" name="on0" value="size">size</td></tr><tr><td><select name="os0">
  <option value="XS">XS $25.00 USD</option>
  <option value="Small">Small $25.00 USD</option>
  <option value="Medium">Medium $25.00 USD</option>
  <option value="Large">Large $25.00 USD</option>
  <option value="XL">XL $25.00 USD</option>
</select> 
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>'
        );

$apparels[102] = array(
  "name" => "DSF Logo",
  "fname" => "DSF TEE",
  "img" => "images/dsf.png",
  "price" => 25,
  "details" => "Black on black design by SMPLFD features the classic Neo-Tiger design in black ink hand-screened onto a black tank top accompanied by a custom printed inside tag.  This modern cut, light and comfortable tank is perfect for the dog days of summer at the ol' ballpark.",

        "paypal" => '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="DEVS9KB74UHC2">
        <input type="hidden" name="on0" value="size">size</td></tr><tr><td><select name="os0">
          <option value="XS">XS $25.00 USD</option>
          <option value="Small">Small $25.00 USD</option>
          <option value="Medium">Medium $25.00 USD</option>
          <option value="Large">Large $25.00 USD</option>
          <option value="XL">XL $25.00 USD</option>
        </select> 
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>'
        );

$apparels[103] = array(
  "name" => "SMPFLD Tiger",
  "fname" => "NEO TIGER",
  "img" => "images/black_tigers.png",
  "price" => 25,
  "details" => "Black on black design by SMPLFD features the classic Neo-Tiger design in black ink hand-screened onto a black tank top accompanied by a custom printed inside tag.  This modern cut, light and comfortable tank is perfect for the dog days of summer at the ol' ballpark.",

        "paypal" => '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="DEVS9KB74UHC2">
        <input type="hidden" name="on0" value="size">size</td></tr><tr><td><select name="os0">
          <option value="XS">XS $25.00 USD</option>
          <option value="Small">Small $25.00 USD</option>
          <option value="Medium">Medium $25.00 USD</option>
          <option value="Large">Large $25.00 USD</option>
          <option value="XL">XL $25.00 USD</option>
        </select> 
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>'
        );

?>