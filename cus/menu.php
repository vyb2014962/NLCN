<?php
  if(isset($_SESSION['dangnhap'])){
    include 'custormer.php';
  }else{
    include 'header.php';
  }


?>
  <nav>
   <div class="container">
    <ul>
      <li><a href="shop.php"><img style="width: 150px; height:60px" src="../img/logo-start.webp"></a></li>
         <li  onclick="formid()"><a href="#">Cần Thơ <i class="fa-solid fa-sort-down"></i></a></li>
      
         <form name="s_form" action="" method="post">
   
        <input type="text" name="search_kw" id="search_kw" size="20"  
               value='<?php empty($_POST['search_kw']) || print $_POST['search_kw'];?> '> 
        
          <input type="submit"  value="search"   > 
    </form>
      <li><a href="../cus/cart.php"><button><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</button></li></a>
      <li><a href="">Lịch Sử <br> Đơn Hàng</a></li>
      <li><a href=""><span class="btn-content"><span class="btn-black"></span></span>Mua thẻ Nạp Ngay</a></li>
      <li><a href="">24H Công Nghệ</a></li>
      <li><a href="">Hỏi Đáp</a></li>
      <li><a href="">Đăng Ký</a></li>
 
    </ul>
   </div>
  </nav>