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

$products = array();
$products[101] = array(
  "name" => "59 Demilune Complete",
  "fname" => "Demilune",
  "img" => "img/products/dl59_wood.jpg",
  "price" => 155,
  "details" => "Demilunes are perfect for a secure feel on slicker floors, 
  without giving up the speed factor, and without the guesswork of “pusher wheels”.
   The 90A gives you the grip when you need it, while the 94A does away with unnecessary fatigue from overly sticky wheels.
        <br><br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a",
    "paypal" =>'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="C3C28Q55RXP3C">
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $155.00 USD</option>
      <option value="Set of 5">Set of 5 $77.50 USD</option>
    </select> 
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
        );
$products[102] = array(
  "name" => "59 Demiurge Complete",
  "fname" => "Demiurge",
   "img" => "img/products/du59_wood.jpg",
   "price" => 155,
   "details" => "The Demiurge is our fastest dual durometer wheel. Boom. The 93A inside edges on a 96A wheel works to give you the perfect combination of speed and edging on a variety of competition surfaces.
        <br><br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 93a | 96a",
    "paypal" =>'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="BXGAXSDSXRMCY">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $155.00 USD</option>
      <option value="Set of 4">Set of 4 $77.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[103] = array(
    "name" => "59 Demirojo Complete",
    "fname" => "Demirojo",
     "img" => "img/products/dr59_wood.jpg",  
    "price" => 155,
    "details" => "The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm <br>
        Durometer: 92a | 96a",
    "paypal" => '    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="UCL9E4CSGFGNG">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $155.00 USD</option>
      <option value="Set of 4">Set of 4 $77.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[104] = array(
    "name" => "Skinny Demilune Complete",
    "fname" => "Demilune",
     "img" => "img/products/dlsd_wood.jpg ",  
    "price" => 155,
    "details" => "Demilunes are perfect for a secure feel on slicker floors, without giving up the speed factor, and without the guesswork of “pusher wheels”. The 90A gives you the grip when you need it, while the 94A does away with unnecessary fatigue from overly sticky wheels.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a",
    "paypal" => '  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="HUJJ6XFMSXXDS">
  <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
    <option value="Set of 8">Set of 8 $155.00 USD</option>
    <option value="Set of 4">Set of 4 $77.50 USD</option>
  </select> 
  <input type="hidden" name="currency_code" value="USD">
  <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
  </form>'
    );
$products[105] = array(
    "name" => "Skinny Demiurge Complete",
    "fname" => "Demiurge",
      "img" => "img/products/dusd_wood.jpg ",  
    "price" => 155,
    "details" => "The Demiurge is our fastest dual durometer wheel. Boom. The 93A inside edges on a 96A wheel works to give you the perfect combination of speed and edging on a variety of competition surfaces.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 93a | 96a",
    "paypal" => '  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="Y7WCE3G8WK95A">
 
  <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
    <option value="Set of 8">Set of 8 $155.00 USD</option>
    <option value="Set of 4">Set of 4 $77.50 USD</option>
  </select> 
  
  <input type="hidden" name="currency_code" value="USD">
  <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
  </form>'
        );
$products[106] = array(
    "name" => "Skinny Demirojo Complete",
    "fname" => "Demirojo",
    "img" => "img/products/drsd_wood.jpg ",   
    "price" => 155,
    "details" => "The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 92a | 96a", 
"paypal" => '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="NYBMLCRAF2C56">
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
          <option value="Set of 8">Set of 8 $155.00 USD</option>
          <option value="Set of 4">Set of 4 $77.50 USD</option>
        </select> 
        <input type="hidden" name="currency_code" value="USD">
        <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
        </form>'
);
$products[107] = array(
    "name" => "Skinny Natural Complete",
    "fname" => "Natural",
    "img" => "img/products/naturalsd_wood.jpg",  
    "price" => 155,
    "details" => "A no fuss, hard, blisteringly fast wheel, the Natural is THE choice for skaters looking for top end speed above anything else. The iconic 97A Vanguard urethane combined with the Faster CNC aluminum hub, provides a solid, structured and fast roll, without sacrificing grip.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 97a", 
    "paypal" => '  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="MZFWU5L85C6AY">
 
  <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
    <option value="Set of 8">Set of 8 $155.00 USD</option>
    <option value="Set of 5">Set of 5 $77.50 USD</option>
  </select> 
  
  <input type="hidden" name="currency_code" value="USD">
  <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
  </form>'
);
$products[108] = array(
    "name" => "Full Demilune Complete",
    "fname" => "Demilune",
    "img" => "img/products/dlfw_wood.jpg ",   
    "price" => 145,
    "details" => "
        Demilunes are perfect for a secure feel on slicker floors, without giving up the speed factor, and without the guesswork of “pusher wheels”. The 90A gives you the grip when you need it, while the 94A does away with unnecessary fatigue from overly sticky wheels.
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 90a | 94a", 
    "paypal" => '    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="E66PFHSKWNE22">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $145.00 USD</option>
      <option value="Set of 4">Set of 4 $72.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
        );
$products[109] = array(
    "name" => "Full Demiurge Complete",
    "fname" => "Demiurge",
    "img" => "img/products/dufw_wood.jpg ",   
    "price" => 145,
    "details" => "
        The Demiurge is our fastest dual durometer wheel. Boom. The 93A inside edges on a 96A wheel works to give you the perfect combination of speed and edging on a variety of competition surfaces. 
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 93a | 96a", 
    "paypal" => '    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="9WG8EVVCGTA24">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $145.00 USD</option>
      <option value="Set of 4">Set of 4 $72.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
        );
$products[110] = array(
    "name" => "Full Demirojo Complete",
    "fname" => "Demirojo",
    "img" => "img/products/drfw_wood.jpg ", 
    "price" => 145,
    "details" => "
        The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 92a | 96a", 
    "paypal" => '    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="NBVHDGT79KR8C">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $145.00 USD</option>
      <option value="Set of 4">Set of 4 $72.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[111] = array(
    "name" => "Full Natural Complete",
    "fname" => "Natural",
    "img" => "img/products/naturalfw_wood.jpg",   
    "price" => 145,
    "details" =>"
        A no fuss, hard, blisteringly fast wheel, the Natural is THE choice for skaters looking for top end speed above anything else. The iconic 97A Vanguard urethane combined with the Faster CNC aluminum hub, provides a solid, structured and fast roll, without sacrificing grip.
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 97a", 
    "paypal" => '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="5YPGEVCS7CKQE">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $145.00 USD</option>
      <option value="Set of 4">Set of 4 $72.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
        );
$products[112] = array(
    "name" => "Skinny Demirojo Tires",
    "fname" => "Demirojo",
    "img" => "img/products/drsdtire_wood.jpg ",    
    "price" => 85,
     "details" => "The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 92a | 96a", 
    "paypal" => '  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="M9H35EE275YQ2">
 
  <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
    <option value="Set of 8">Set of 8 $85.00 USD</option>
    <option value="Set of 4">Set of 4 $42.50 USD</option>
  </select> 
  
  <input type="hidden" name="currency_code" value="USD">
  <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
  </form>'
);
$products[113] = array(
    "name" => "Skinny Demiurge Tires",
    "fname" => "Demiurge",
    "img" => "img/products/dusdtire_wood.jpg ",   
    "price" => 85,
    "details" => "The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 92a | 96a", 
    "paypal" => '<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="7JBL8C7EK76UA">
     
      <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
        <option value="Set of 8">Set of 8 $85.00 USD</option>
        <option value="Set of 4">Set of 4 $42.50 USD</option>
      </select> 
      
      <input type="hidden" name="currency_code" value="USD">
      <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
      </form>'
);
$products[114] = array(
    "name" => "Skinny Demilune Tires",
    "fname" => "Demilune",
      "img" => "img/products/dlsdtire_wood.jpg ",    
    "price" => 85,
    "details" => "Demilunes are perfect for a secure feel on slicker floors, without giving up the speed factor, and without the guesswork of “pusher wheels”. The 90A gives you the grip when you need it, while the 94A does away with unnecessary fatigue from overly sticky wheels.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a",
    "paypal" => '    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="SGF6UWCRXV6BY">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $85.00 USD</option>
      <option value="Set of 4">Set of 4 $42.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[115] = array(
    "name" => "Skinny Natural Tires",
    "fname" => "Skinny",
    "img" => "img/products/naturalsdtire_wood.jpg",    
    "price" => 85,
     "details" => "A no fuss, hard, blisteringly fast wheel, the Natural is THE choice for skaters looking for top end speed above anything else. The iconic 97A Vanguard urethane combined with the Faster CNC aluminum hub, provides a solid, structured and fast roll, without sacrificing grip.
        <br><br>
        Height: 62mm <br>
        Lip: 7mm <br>
        Contact Patch: 31.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 97a", 
    "paypal" =>'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="MPYC4GCU9S29L">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $85.00 USD</option>
      <option value="Set of 4">Set of 4 $42.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[116] = array(
    "name" => "59 Demilune Tires",
    "fname" => "Demilune",
    "img" => "img/products/dl59tire_wood.jpg",      
    "price" => 85,
      "details" => "Demilunes are perfect for a secure feel on slicker floors, without giving up the speed factor, and without the guesswork of “pusher wheels”. The 90A gives you the grip when you need it, while the 94A does away with unnecessary fatigue from overly sticky wheels.
        <br><br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 90a | 94a",
    "paypal" =>' <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="Y8G4H27LFJ9WL">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $85.00 USD</option>
      <option value="Set of 4">Set of 4 $42.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
        );
$products[117] = array(
    "name" => "59 Demirojo Tires",
    "fname" => "Demirojo",
    "img" => "img/products/dr59tire_wood.jpg",     
    "price" => 85,
        "details" => "The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm <br>
        Durometer: 92a | 96a",
    "paypal" =>' <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="3YPGG7HHP8MPC">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $85.00 USD</option>
      <option value="Set of 4">Set of 4 $42.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[118] = array(
    "name" => "59 Demiurge Tires",
    "fname" => "Demiurge",
    "img" => "img/products/du59tire_wood.jpg",     
    "price" => 85,
    "details" => "The Demiurge is our fastest dual durometer wheel. Boom. The 93A inside edges on a 96A wheel works to give you the perfect combination of speed and edging on a variety of competition surfaces.
        <br><br>
        Height: 59mm <br>
        Contact Patch: 34.5mm <br>
        Total Width: 38.5mm<br>
        Durometer: 93a | 96a",
    "paypal" =>'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="2B8LHKM7HLY3J">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $85.00 USD</option>
      <option value="Set of 4">Set of 4 $42.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[119] = array(
    "name" => "Full Demilune Tires",
    "fname" => "Demilune",
    "img" => "img/products/dlfwtire_wood.jpg",     
    "price" => 75,
        "details" => "
        Demilunes are perfect for a secure feel on slicker floors, without giving up the speed factor, and without the guesswork of “pusher wheels”. The 90A gives you the grip when you need it, while the 94A does away with unnecessary fatigue from overly sticky wheels.
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 90a | 94a", 
    "paypal" =>'      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="URNSM4VRJ8RNS">
     
      <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
        <option value="Set of 8">Set of 8 $75.00 USD</option>
        <option value="Set of 4">Set of 4 $37.50 USD</option>
      </select> 
      
      <input type="hidden" name="currency_code" value="USD">
      <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
      </form>'
);
$products[120] = array(
    "name" => "Full Demirojo Tires",
    "fname" => "Demirojo",
    "img" => "img/products/drfwtire_wood.jpg",     
    "price" => 75,
        "details" => "
        The Demirojo allows speed and agility to play the same game. The 92A allows you to control your edges, and the 96A provides sweet break and slide making it the perfect wheel for high speed footwork across a variety of surfaces.
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 92a | 96a", 
    "paypal" =>'    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="NJ44DW2TE6YDC">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $75.00 USD</option>
      <option value="Set of 4">Set of 4 $37.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[121] = array(
    "name" => "Full Demiurge Tires",
    "fname" => "Demiurge",
    "img" => "img/products/dufwtire_wood.jpg",     
    "price" => 75,
     "details" => "
        The Demiurge is our fastest dual durometer wheel. Boom. The 93A inside edges on a 96A wheel works to give you the perfect combination of speed and edging on a variety of competition surfaces. 
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 93a | 96a", 
    "paypal" =>' <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="XPQNX38Y34ESC">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $75.00 USD</option>
      <option value="Set of 4">Set of 4 $37.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[122] = array(
    "name" => "Full Natural Tires",
    "fname" => "Natural",
    "img" => "img/products/naturalfwtire_wood.jpg",     
    "price" => 75,
        "details" =>"
        A no fuss, hard, blisteringly fast wheel, the Natural is THE choice for skaters looking for top end speed above anything else. The iconic 97A Vanguard urethane combined with the Faster CNC aluminum hub, provides a solid, structured and fast roll, without sacrificing grip.
        <br><br>
        Height: 62mm <br>
        Contact Patch: 37.5mm <br>
        Total Width: 42.5mm<br>
        Durometer: 97a", 
    "paypal" =>' <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="LSG4J4VZNBMZC">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $75.00 USD</option>
      <option value="Set of 4">Set of 4 $37.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);
$products[123] = array(
    "name" => "Faster Hub Puller",
    "fname" => "Hub Puller",
    "img" => "img/products/hubpuller_wood.jpg",     
    "price" => 15,
    "details" =>"The Faster hub puller will make changing your wheels a breeze. Check out our video FaQ on wheel changing here:", 
    "paypal" =>'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="PAQZNL84KBB7N">
            <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
            </form>'
);

$products[124] = array(
    "name" => "Faster Hub",
    "fname" => "Hub",
    "img" => "img/products/hubs.jpg",     
    "price" => 90,
    "details" =>"Precision engineered hubs of the tightest tollerance. Faster sets the curve for high quality manufactured hubs.", 
    "paypal" =>'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="5P9B6N6F867VE">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $90.00 USD</option>
      <option value="Set of 4">Set of 4 $45.00 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form>'
);

?>

<!-- c-clip 
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom: 0px;">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="FR25558WBSZFS">
   
    <input type="hidden" name="on0" value="Quantity">Quantity<select name="os0">
      <option value="Set of 8">Set of 8 $5.00 USD</option>
      <option value="Set of 4">Set of 4 $2.50 USD</option>
    </select> 
    
    <input type="hidden" name="currency_code" value="USD">
    <center><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"></center>
    </form> -->










