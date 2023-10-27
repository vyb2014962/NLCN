<html>
<head>
    <meta charset="utf-8"/>
</head>
    
<body>
    
  
    
    <?php   //search


        if (isset($_POST['search_kw']))
            $keyword = trim($_POST['search_kw']);
        else
            $keyword = '';
            


        require "../connection.php";   //connected to DB after this step


        //process the search ketwords 


        $query = "SELECT * FROM dien_thoai " .
            " WHERE " .
            " (dthoai_ten LIKE '%$keyword%')";

        //query
        $q_result = mysqli_query($conn, $query) 
            or die("Query failed: " . mysqli_error());

            $count = mysqli_num_rows($q_result);
        //display the search resul
         if($count > 0 ){
                if($keyword ==''){
            echo '
            <div class="product-gallery-one-content">
          <div class="product-gallery-one-content-title">
            <h2>Điện Thoại Nổi Bật NHất</h2>
          </div>
          <div class="product-gallery-one-content-product">';
                }
                else{
                      echo '
                <div class="product-gallery-one-content">
             <div class="product-gallery-one-content-title">
             <h2>Kết quả tìm kiếm</h2>
             </div>
            <div class="product-gallery-one-content-product">'; 
                }
        while ($row = mysqli_fetch_array($q_result)) {


            
            echo <<<_DELETE_FORM
            <div class='product-gallery-one-content-product-item'>
            <img src='$row[img]' alt=''>
            <div class="product-gallery-one-content-product-item-icon" >
             <form method="POST" action="../cus/themgiohang.php?idsanpham=$row[dthoai_ma]">
               <button width="100" height="50" style="border: none;background:#fff" type="submit" name="cart" <i style="font-size:20px"class="fa-solid fa-cart-shopping"></i></button>
                  <i class="fa-regular fa-eye"></i>
               </form>
            
            </div>
           
            <div class='product-gallery-one-content-product-item-text'>
              <li><img src='../img/icon1.webp' alt=''><p>Tuần lễ SamSung</p></li>
             <li>$row[dthoai_ten] </li>
             <li>$row[price] <sup>đ</sup> <span>$row[pres]</span></li>
              <li>$row[gift]<sup>đ</sup></li>
              <li>$row[dgia]<i class='fa-solid fa-star'></i> ($row[dgia_sl])</li>
            </div>
          </div>


          _DELETE_FORM;
            }
            echo"
            </div>
        </div>";
        }
             else {
                 echo '
                <div class="product-gallery-one-content">
             <div class="product-gallery-one-content-title">
             <h2>Kết quả tìm kiếm</h2>
             </div>
            <div class="product-gallery-one-content-product">
                 <h4 style="margin: 0 auto; color:gray">Không tìm thấy dữ liệu nào phù hợp với từ khóa tìm kiếm của bạn.</h4>';
            }
    


    ?>
</body>

</html>