  <?php   
echo "
        <div class='product-gallery-one-content'>
          <div class='product-gallery-one-content-title'>
            <h2>Điện Thoại Nổi Bật NHất</h2>
          </div>
          <div class='product-gallery-one-content-product'>";
        
        require("../connection.php");
     
        $query = "SELECT * FROM dien_thoai dt join brand_mobie bm on dt.ma_brand =bm.ma_brand where brand_ten='$temp'";
        $q_result = mysqli_query($conn, $query)
            or die("Query failed");

        while ($row = mysqli_fetch_array($q_result)) {


          echo"  <div class='slider-product-one-content-item'>\n";
          echo" <img src='$row[img]' alt=''>";
          echo"  <div class='slider-product-one-content-item-text'>";
          echo"    <li><img src='../img/icon1.webp' alt=''><p>Tuần lễ SamSung</p></li>";
           echo"   <li>$row[dthoai_ten] </li>";
           echo"   <li>$row[price] <sup>đ</sup> <span>$row[pres]</span></li>";
           echo"   <li>$row[gift]<sup>đ</sup></li>";
           echo"   <li>$row[dgia]<i class='fa-solid fa-star'></i>  (50)</li>";
           echo" </div>
          </div>";
        }
?>