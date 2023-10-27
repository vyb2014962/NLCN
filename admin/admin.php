<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/shoptest.css">
    <link rel="stylesheet" href="../css/fix.css">
    <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Rowan</title>
</head>
<body>
<?php
session_start();
/*unset($_SESSION['username']);*/
if (!isset($_SESSION['username'])) {
    
	 header('Location: ../cus/shop.php');
}
?>
  <header>
    <ul>
        <li><a href=""><img src="../img/logo1.webp"></a></li>
        <li><a href=""></a><button>ADMIN<i class="fa-solid fa-lock" style="padding-left:5px"></i></button>
          <div class="header-menu">
            <ul>
              <li><a href="#" onclick="formadd()">Thêm Sản Phẩm</a></li>
              <li><a href="logout.php" >Thoát</a></li>
            </ul>
          </div>
        
        </li>
    </ul>
      <?php
    include ('add.php');
    include ("fix.php")
    ?>
       
  </header>
  <nav>
   <div class="container">
    <ul>
      <li><a href="admin.php"><img style="width: 150px; height:60px" src="../img/logo-start.webp"></a></li>
         <li  onclick="formid()"><a href="#">Cần Thơ <i class="fa-solid fa-sort-down"></i></a></li>
      
         <form name="s_form" action="" method="post">
   
        <input type="text" name="search_kw" id="search_kw" size="20"  
               value='<?php empty($_POST['search_kw']) || print $_POST['search_kw'];?> '> 
        
          <input type="submit"  value="search"   > 
    </form>
      <li><a href=""></a><button><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</button></li>
      <li><a href="">Lịch Sử <br> Đơn Hàng</a></li>
      <li><a href=""><span class="btn-content"><span class="btn-black"></span></span>Mua thẻ Nạp Ngay</a></li>
      <li><a href="">24H Công Nghệ</a></li>
      <li><a href="">Hỏi Đáp</a></li>
      <li><a href="">Game App</a></li>

      
    </ul>
   </div>
  </nav>
  <section class="menu-bar">
    <div class="container">
      <div class="menu-bar-content">
        <ul>
          <li><a href=""><img src="../img/logo-iphone.jpg" alt=""></a></li>
          <li><a href=""><img src="../img/logo-samsung.jpg" alt=""></a></li>
          <li><a href=""><img src="../img/logo-xiaomi.jpg" alt=""></a></li>
          <li><a href=""><img src="../img/logo-realme.png" alt=""></a></li>
          <li><a href=""><img src="../img/logo-oppo.jpg" alt=""></a></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="product-gallery-one">
    <div class="container">
        <div class="product-gallery-one-content">
          <div class="product-gallery-one-content-title">
            <h2>Điện Thoại Nổi Bật NHất</h2>
          </div>
          <div class="product-gallery-one-content-product">
          <?php
        include ('search.php');
          ?>
          </div>
        </div>
    </div>
  </section>

  <script src="../js/dthoai.js"></script>

</script>
</body>

</html>