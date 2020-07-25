<?php
use oop\fruit\Anana\anana;
use oop\fruit\orange\Orange;

include('fruit/fruit.php');
include('fruit/anana.php');
include('fruit/orange.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoir_poo_php_Arcade</title>
</head>
<body>

<?php
$orange=new orange('orange');
$orange->affichage();
echo '</br>';

$anana= new anana('anana');

$anana->affichage();

?>
    
</body>
</html>