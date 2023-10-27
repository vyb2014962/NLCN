<?php
session_start();
    unset($_SESSION['dangnhap']);
header('Location: ../cus/shop.php');
?>