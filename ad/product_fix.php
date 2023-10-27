
 <div class="admin-content-right">
            <section class="product-gallery-one">
    <div class="container">
        <div class="product-gallery-one-content">
          <div class="product-gallery-one-content-title">
            <h2>Điện Thoại Nổi Bật NHất</h2>
          </div>
          <div class="product-gallery-one-content-product">
          <?php
        include ('../admin/search.php');
          ?>
          </div>
        </div>
    </div>
    <p>Trang:</p>
    <?php
      require("../connection.php");
      $query= "SELECT * FROM dien_thoai";
      $q_result = mysqli_query($conn, $query)
            or die("Query failed");   
      $row_count=mysqli_num_rows($q_result);
       $trang=ceil($row_count/4)
    ?>
    <ul class="list_trang">
      <?php
      for($i=1;$i<=$trang;$i++){

      ?>
          <li <?php if($i==$page ){
            echo 'style="background:brown;"';
          }else{
            echo '';
          }
          
          ?>
          
          ><a href="../ad/admin.php?menu=danhsachsanpham&trang=<?php echo $i?>"><?php echo $i ?></a></li>
        <?php
      }
        ?>
        </ul>
  </section>
        </div>
    </section>
</body>
</html>