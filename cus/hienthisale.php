<?php
        
        require("../connection.php");
        $index=1;
 
        $query = "SELECT * FROM dien_thoai_sale";
        $q_result = mysqli_query($conn, $query)
            or die("Query failed");
        
        while ($row = mysqli_fetch_array($q_result)) {


          echo"  <div class='slider-product-one-content-item'>\n";
          echo"  <img src='../img/$index.webp' alt=''>";
          echo"  <div class='slider-product-one-content-item-text'>";
          echo"    <li><img src='../img/icon1.webp' alt=''><p>Tuần lễ SamSung</p></li>";
           echo"   <li>$row[dthoai_ten]. </li>";
           echo"   <li>$row[price] .<sup>đ</sup> <span>$row[pres].</span></li>";
           echo"   <li>$row[gift].<sup>đ</sup></li>";
           echo"   <li>$row[dgia]<i class='fa-solid fa-star'></i>  (50)</li>";
           echo" </div>
          </div>";
          $index++;
        }
    ?>