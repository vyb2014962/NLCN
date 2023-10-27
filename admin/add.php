<?php 
        /* process add entry if any */
        if (isset($_POST['add_spham'])) {
            //make connection and select DB
            require("../connection.php");

            
            $dt_ma= $_POST['dthoai_ma'];
            $dt_ten = $_POST['dthoai_ten'];
            $dt_price = $_POST['price'];
            $dt_gift = $_POST['gift'];
            $dt_pres= $_POST['pres'];
            $dt_brand = $_POST['ma_brand'];
            $dgia=$_POST['dgia'];
            $dgia_sl=$_POST['dgia_sl'];
            $img="../img/";
            if(isset($_FILES['img'])){
              $name=$_FILES['img']['name'];
              $img="../img/".$name;

            }
                
            $query = "INSERT INTO dien_thoai (dthoai_ma, dthoai_ten, price," .
                " gift, pres,dgia,dgia_sl,img, ma_brand)" . 
                " VALUES ($dt_ma, '$dt_ten', '$dt_price'," .
                " '$dt_gift', '$dt_pres','$dgia','$dgia_sl','$img', $dt_brand )";
            
            $q_result = mysqli_query($conn,$query) 
                or die("Couldn't add new entry: " . mysqli_error($conn));
                header('Location: ../admin/admin.php');

}
    ?>
    <div  class="add-form">
        <div class="add-form-content">
          <h2>Vui lòng Nhập sản Phẩm <span id="add-close" onclick="formaddclose()">X Đóng</span></h2>
          <form action="" action="add.php" method="post" enctype="multipart/form-data">
          <?php
            include '../function.php';
            ?>
              <p>Vui lòng Nhập đầy đủ Thông tin</p>
              <input  name="dthoai_ma" id='num1' value="<?php echo get_ma();?>">
              <input  name="dthoai_ten"  placeholder="Nhập tên Sản Phẩm ">
              <input  name= "price"placeholder="Vui lòng nhập Giá ">
              <input  name="gift" placeholder="Vui lòng nhập quà ">
              <input  name="pres"placeholder="% discount ">
              <input  name="dgia" placeholder="Vui lòng nhập đánh giá ">
              <input  name="dgia_sl" placeholder="Vui lòng nhập số lượng đã  đánh giá ">
              <select name="ma_brand" ><?php dropdown_options('brand_mobie','ma_brand','brand_ten'); ?></select>
              <input type='file' name="img">
              <input type="submit" name="add_spham" value="Thêm Sản Phẩm " onclick="return as_confirm();" >
            </form>
        </div>
      </div>




      


      