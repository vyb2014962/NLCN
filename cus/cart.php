
<?php
session_start();
?>
<?php
if(isset($_SESSION['cart'])){
   
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cus.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Rowan</title>
</head>
<body>
 
<?php

include 'menu.php'
?>
   <?php
       if(isset($_GET['product'])){
        $temp=$_GET['product'];
       }else{
        $temp='';
       }
       if($temp=='delivery'){
        include "../cus/delivery.php";
       }elseif($temp=='payment'){
        include "../cus/payment.php";
       }
       
       
       else{
        include "./giohang.php";
       }
?>


 <script src="../js/shopajax.js"></script>
