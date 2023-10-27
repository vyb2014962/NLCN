 <?php
 include "../ad/brand.php"
 ?>
 <?php
 $brand = new brand;
 if(!isset($_GET['brand_id']) || ($_GET['brand_id'])==null){
    echo"<script>ưindow.location ='admin.php'</script>";

 }
 else{
    $brand_id= $_GET['brand_id'];
 }

 $delete_brand= $brand-> delete_brand($brand_id);
 ?>