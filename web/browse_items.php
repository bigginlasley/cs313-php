<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styler.css" rel="stylesheet" type="text/css"/>
<title>Browse</title>

</head>

<?php
function setVar($name)
{
    switch($name)
    {
        case "boots":
            $_SESSION["boots"] = "Adrenaline GTX Boot";
            break;
        case "gloves":
            $_SESSION["gloves"] = "Summit Glove";
            break;
        case "bibs":
            $_SESSION["bibs"] = "Lochsa";
            break;
        case "goggles":
            $_SESSION["goggles"] = "Oculus Goggle";
            break;
        case "sled":
            $_SESSION["sled"] = "Polaris PRO-RMK 850";
            break;
    }
}
?>

<?php

if($_GET)
{
    if(isset($_GET['boots'])){
        setVar('boots');
    }
    elseif(isset($_GET['gloves']))
    {
        setVar('gloves');
    }
    elseif(isset($_GET['bibs']))
    {
        setVar('bibs');
    }
    elseif(isset($_GET['goggles']))
    {
        setVar('goggles');
    }
    elseif(isset($_GET['sled']))
    {
        setVar('sled');
    }
}

?>
<body data-gr-c-s-loaded="true">


<div class="bg_img-1">
  <div class="caption">
  <span class="border">Welcome</span>
  </div>
</div>


<div class="d">
  <h3 class="p1">Gear</h3>
  <table align="center">
        <tr>
            <th align="center">Boots</th>
            <th align="center">Gloves</th>
        </tr>
        <tr>
            <td align="center">
                    <div>
                            <div>
                                    <img src ="pictures/boot.jpeg" alt="boots" height="256" width="256">
                            </div>
                            <button Name="boots" id="boots" onClick='location.href="?boots=1"'>add to cart</button>
                        </div>
            </td>
            <td align="center">
                    <div>
                            <div>
                                    <img src ="pictures/glove.jpg" alt="gloves" height="256" width="256">
                            </div>
                                <button Name="gloves" id="gloves" onClick='location.href="?gloves=1"'>add to cart</button>
                            
                        </div>
            </td>
        </tr>
        <tr>
            <th align="center">Bibs</th>
            <th align="center">Goggles</th>
        </tr>
        <tr>
            <td align="center">
                    <div>
                            <div>
                                    <img src ="pictures/lochsa.jpeg" alt="bibs" height="256" width="256">
                            </div>
                            <button Name="bibs" id="bibs" onClick='location.href="?bibs=1"'>add to cart</button>
                    </div>
            </td>
            <td align="center">
                    <div>
                            <div>
                                    <img src ="pictures/goggles.jpeg" alt="goggles" height="256" width="256">
                            </div>
                            <button Name="goggles" id="goggles" onClick='location.href="?goggles=1"'>add to cart</button>
                        </div>
            </td>
        </tr>
       
    </table>
</div>


<div class="bg_img-2">
</div>

<div class="d">
        <h3 class="p1">Sled</h3>
        <table align="center">
                <tr>
                        <td align="center">
                                <div>
                                        <div>
                                                <img src ="pictures/sled.png" alt="sled" height="256" width="256">
                                        </div>
                                        <button Name="sled" id="sled" onClick='location.href="?sled=1"'> add to cart</button>
                                </div>
                        </td>
                    </tr>
         </table>
      </div>


<div class="bg_img-1">
  <a href="view_cart.php">
  <div class="caption">
  <span class="border">Go To Cart</span>
  </div>
  </a>
</div>



</body>
</html>
