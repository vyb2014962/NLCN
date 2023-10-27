  
<?php/*
if (isset($_POST['edit_spham'])) {
            //make connection and select DB
            require("../connection.php");

            
            $ma= $_POST['edit_spham'];
                
           $query = "SELECT * FROM dien_thoai where dthoai_ma=".$ma;
            
            $q_result = mysqli_query($conn,$query) 
                or die("Couldn't add new entry: " . mysqli_error($conn));
    while ($row = mysqli_fetch_array($q_result)) {
     echo"         <div  class='fix-form'>
                  <div class='fix-form-content'>
                    <h2>Vui lòng Nhập sản Phẩm Cần sửa<span id='add-close' onclick='formfixclose()'>X Đóng</span></h2>
                    <form  action='' method='post'>
                    <?php
                    include '../function.php';
                    ?>
                        <p>Vui lòng Nhập đầy đủ Thông tin</p>
                        <input  name='dthoai_ma' value='$row[dthoai_ma]'>
                        <input  name='dthoai_ten'  placeholder='Nhập tên Sản Phẩm ' value='$row[dthoai_ten]'>
                        <input  name= 'price' placeholder='Vui lòng nhập Giá' value='$row[price]'>
                        <input  name='gift' placeholder='Vui lòng nhập quà ' value='$row[gift]' >
                        <input  name='pres' placeholder='% discount' value='$row[pres]' >
                        <input name='ma_brand' value='$row[ma_brand]' >
                        <input type='submit' name='fix_spham' value='Thêm bài viết' >
                      </form>
                  </div>
                </div> ";
    }
}

 ?>
  <?php 
        /* process add entry if any 
        if (isset($_POST['fix_spham'])) {
            //make connection and select DB
            require("../connection.php");

            
            $dt_ma= $_POST['dthoai_ma'];
            $dt_ten = $_POST['dthoai_ten'];
            $dt_price = $_POST['price'];
            $dt_gift = $_POST['gift'];
            $dt_pres= $_POST['pres'];
            $dt_brand = $_POST['ma_brand'];
                
            $query = "update  dien_thoai  set dthoai_ten='$dt_ten', price='$dt_price' ,gift='$dt_gift' ,pres='$dt_pres', ma_brand=$dt_brand where dthoai_ma=$dt_ma";
            
            $q_result = mysqli_query($conn,$query) 
                or die("Couldn't add new entry: " . mysqli_error($conn));
}
    ?>*/