<?php
//This if serves to demonstrate if there is something written
if (!isset($_GET['moneda'])){
    die("<br>"."Campo Vasio". "<br> <br>");
} 
//Declare the variables
$moneda=$_GET['moneda'];
$oficial=$moneda/69.75;
$blue=$moneda/133.00;
$donador=$moneda/90.675;
//Show result
echo$moneda,"<br>"." Peso argentino es igula a ",$oficial, " USD oficial"."<br>";

echo$moneda," Peso argetnino es igual a", $blue,  "USD blue<br>";

echo$moneda," Peso argentino es igual a", $donador, "USD solidario ";

?>