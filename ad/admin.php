<?php
include "header.php";
include "menu.php";
    include "../admin/fix.php"
?>

<?php
       if(isset($_GET['menu'])){
        $temp=$_GET['menu'];
       }else{
        $temp='';
       }
       if($temp=='showbrand'){
        include "./showbrand.php";
       }elseif($temp=='addsanpham'){
         include "./addproduct.php";
       }elseif($temp=='danhsachsanpham'){
         include "./product_fix.php";
       }
       
       
       else{
        include "./add.php";
       }
          ?>





  <script src="../js/dthoai.js"></script>

</script>