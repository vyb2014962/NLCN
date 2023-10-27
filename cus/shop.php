<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cus.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Rowan</title>
</head>
<body>
<?php
include 'menu.php';

?>
  <?php 
include "logo.php"

?>
  <section class="slider">
    <div class="container">
      <div class="slider-content">
        <div class="slider-content-child1">
          <div class="slider-content-child1-top-container">
          <div class="slider-content-child1-top">
              <a href=""><img src="../img/banner2.png"  alt=""></a> 
              <a href=""><img src="../img/banner3.png"  alt=""></a>
              <a href=""><img src="../img/banner4.webp"  alt=""> </a>
              <a href=""><img src="../img/banner1.png"  alt=""></a>
              <a href=""><img src="../img/banner6.webp"  alt=""></a>
            </div>
            <div class="slider-content-child1-top-btn" >
              <i class="fa-solid fa-chevron-left" onclick="formanimationclose()"></i>
              <i class="fa-sharp fa-solid fa-chevron-right" onclick="formanimation()"></i>
            </div>
          </div>
          <div class="slider-content-child1-bot">
              <li class="yellow"> Galaxy A54 & A54 Giá tốt</li>
              <li>Iphone 14pro Max Giảm đến 9 triệu</li>
              <li>Iphone 12pro Max siêu sale</li>
              <li>Deal sốc Cuối Tuần</li>
              <li>Iphone 11pro MAx Rẻ vô đối</li>
          </div>
        </div>
        <div class="slider-content-child2">
            <li><a href=""><img src="../img/ban1.jpg"  alt=""></a></li>
            <li><a href=""><img src="../img/ban2.jpg" alt=""></a></li>
            <li><a href=""><img src="../img/ban3.jpg" alt=""></a></li>
            <li><a href=""><img src="../img/ban4.jpg" alt=""></a></li>
        </div>
      </div>
    </div>
  </section>
  <section class="baner-one">
    <div class="container">
      <img src="../img/Promote-Des-1200x100-8.webp" alt="">
    </div>
  </section>
  <section class="slider-product-one">
    <div class="container">
      <div class="slider-product-one-content">
        <div class="slider-product-one-content-title">
        <h2> săn Sale Online Mỗi Ngày   </h2>
      </div>
      <div class="slider-product-one-content-container">

        <div class="slider-product-one-content-item-content">

          <div class="slider-product-one-content-list">
          <?php
          include ('./hienthisale.php')
          ?>
            </div>
            <div class="slider-product-one-content-list">
              <div class="slider-product-one-content-item">
                <img src="../img/1.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy A34 5G 256GB</li>
                  <li>9.190.000 <sup>đ</sup> <span>-3%</span></li>
                  <li>Quà 2.990.000 <sup>Đ</sup></li>
                  <li>4.6<i class="fa-solid fa-star"></i>  (50)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/2.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy A14 4G </li>
                  <li>4.090.000 <sup>đ</sup> <span>-8%</span></li>
                  <li>Giá Tốt 3.890.000 <sup>đ</sup></li>
                  <li>4.4<i class="fa-solid fa-star"></i>  (129)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/3.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy A14 6G </li>
                  <li>4.590.000 <sup>đ</sup> <span>-8%</span></li>
                  <li>Quà 200.000 <sup>đ</sup></li>
                  <li>4.2<i class="fa-solid fa-star"></i>  (50)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/4.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy S21 FE 5G (6GB/128GB)</li>
                  <li>10.990.000 <sup>đ</sup> <span>-15%</span></li>
                  <li>Quà 2.990.000 <sup>đ</sup></li>
                  <li>3.4<i class="fa-solid fa-star"></i>  (40)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/5.webp" alt="">
                <div class="slider-product-one-content-item-text red-icon">
                  <li style="background-color: red;"><img  src="../img/icon2.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy S23  5G 128GB</li>
                  <li>20.990.000 <sup>đ</sup> <span>-8%</span></li>
                  <li>Quà 1.990.000 <sup>đ</sup></li>
                  <li>4.5<i class="fa-solid fa-star"></i>  (10)</li>
                </div>
              </div>
            </div>
            <div class="slider-product-one-content-list">
              <div class="slider-product-one-content-item">
                <img src="../img/1.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy A34 5G 256GB</li>
                  <li>9.190.000 <sup>đ</sup> <span>-3%</span></li>
                  <li>Quà 2.990.000 <sup>Đ</sup></li>
                  <li>4.6<i class="fa-solid fa-star"></i>  (50)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/2.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy A14 4G </li>
                  <li>4.090.000 <sup>đ</sup> <span>-8%</span></li>
                  <li>Giá Tốt 3.890.000 <sup>đ</sup></li>
                  <li>4.4<i class="fa-solid fa-star"></i>  (129)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/3.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy A14 6G </li>
                  <li>4.590.000 <sup>đ</sup> <span>-8%</span></li>
                  <li>Quà 200.000 <sup>đ</sup></li>
                  <li>4.2<i class="fa-solid fa-star"></i>  (50)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/4.webp" alt="">
                <div class="slider-product-one-content-item-text">
                  <li><img src="../img/icon1.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy S21 FE 5G (6GB/128GB)</li>
                  <li>10.990.000 <sup>đ</sup> <span>-15%</span></li>
                  <li>Quà 2.990.000 <sup>đ</sup></li>
                  <li>3.4<i class="fa-solid fa-star"></i>  (40)</li>
                </div>
              </div>
    
              <div class="slider-product-one-content-item">
                <img src="../img/5.webp" alt="">
                <div class="slider-product-one-content-item-text red-icon">
                  <li style="background-color: red;"><img  src="../img/icon2.webp" alt=""><p>Tuần lễ SamSung</p></li>
                  <li>SamSung galaxy S23  5G 128GB</li>
                  <li>20.990.000 <sup>đ</sup> <span>-8%</span></li>
                  <li>Quà 1.990.000 <sup>đ</sup></li>
                  <li>4.5<i class="fa-solid fa-star"></i>  (10)</li>
                </div>
              </div>
            </div>
        </div>
          <div class="slider-product-one-content-btn" >
            <i class="fa-solid fa-chevron-left  " onclick=" formanimationback()"></i>
            <i class="fa-sharp fa-solid fa-chevron-right  " onclick=" formanimationnext()"></i>
            </div>
      </div>
     </div>
    </div>
  </section>
  <section class="product-gallery-one">
    <div class="container">

          <?php
       if(isset($_GET['logo'])){
        $temp=$_GET['logo'];
       }else{
        $temp='';
       }
       if($temp!=''){
        include "../cus/logo_search.php";
       }else{
        include "./search_cus.php";
       }
          ?>
      
    </div>
  </section>
  <section class="product-gallery-two">
    <div class="container">
      <div class="product-gallery-two-content">
          <div class="product-gallery-two-content-right">
            <img src="../img/down2.jpg" alt="">
          </div>
          <div class="product-gallery-two-content-left">
            <div class="product-gallery-two-content-left-top">
                <li class="active">Điện Thoại</li>
                <li>Realme</li>
                <li>Oppo</li>
                <li>Iphone</li>
                <li><a href="">Xem tất Cả<i class="fa-solid fa-caret-right"></i></a></li>
            </div>
              <div class="product-gallery-two-content-left-bottom">
                  <div class="product-gallery-two-content-left-bottom-item">
                    <img src="../img/iphone-14-1T.jpg" alt="">
                    <div class="product-gallery-two-content-left-bottom-text">
                      <li>Đặt Trước đến 16/09</li>
                      <li>Iphone 14 1T</li>
                      <li>Hàng sắp về</li>
                      <li>41.990.000<sup>đ</sup></li>
                      <li>ƯU đãi Khủng</l> 
                    </div>
                  </div>
                  <div class="product-gallery-two-content-left-bottom-item">
                  <img src="../img/iphone-14-512.jpg" alt="">
                    <div class="product-gallery-two-content-left-bottom-text">
                      <li>Đặt Trước đến 16/09</li>
                      <li>Iphone 14 512GB</li>
                      <li>Hàng sắp về</li>
                      <li>26.990.000<sup>đ</sup></li>
                      <li>ƯU đãi Khủng</l> 
                    </div>
                  </div>
                  <div class="product-gallery-two-content-left-bottom-item">
                  <img src="../img/iphone-14-256.jpg" alt="">
                    <div class="product-gallery-two-content-left-bottom-text">
                      <li>Đặt Trước đến 16/09</li>
                      <li>Iphone 14 256GB</li>
                      <li>Hàng sắp về</li>
                      <li>22.390.000<sup>đ</sup></li>
                      <li>ƯU đãi Khủng</l> 
                    </div>
                  </div>
                  <div class="product-gallery-two-content-left-bottom-item">
                  <img src="../img/iphone-14-128.jpg" alt="">
                    <div class="product-gallery-two-content-left-bottom-text">
                      <li>Đặt Trước đến 16/09</li>
                      <li>Iphone 14 128GB</li>
                      <li>Hàng sắp về</li>
                      <li>19.90.000<sup>đ</sup></li>
                      <li>ƯU đãi Khủng</l> 
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>

  
  <script src="../js/shopajax.js"></script>

</body>
</html>