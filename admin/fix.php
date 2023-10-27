
<?php 
        /* process add entry if any */
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
    ?>

<div  class='fix-form'>
                  <div class='fix-form-content'>
                    <h2>Vui lòng Nhập sản Phẩm Cần sửa<span id='add-close' onclick='formfixclose()'>X Đóng</span></h2>
                    <form  action='' method='post'>
                        <p>Vui lòng Nhập đầy đủ Thông tin</p>
                        <input id="ma" name='dthoai_ma' value=''>
                        <div style="text-align: left;padding-top:10px">
                        <label  style="clear:both;" for="">Tên Sản Phẩm : <span style="color:red">*</span></label>
                        <input  id="ten" name='dthoai_ten'  placeholder='Nhập tên Sản Phẩm ' value=''></div>
                          <div style="text-align: left;padding-top:10px">
                        <label style="clear:both;"  for="">Nhập Giá Sản Phẩm : <span style="color:red">*</span></label>
                        <input  id="price" name= 'price' placeholder='Vui lòng nhập Giá' value=''></div>
                          <div style="text-align: left;padding-top:10px">
                        <label  style="clear:both;" for="">Nhập Quà : <span style="color:red">*</span></label>
                        <input  id="gift" name='gift' placeholder='Vui lòng nhập quà ' value='' ></div>
                          <div style="text-align: left;padding-top:10px">
                        <label style="clear:both;"  for="">Discount : <span style="color:red">*</span></label>
                        <input  id="pres" name='pres' placeholder='% discount' value='' ></div>
                          <div style="text-align: left;padding-top:10px">
                        <label style="clear:both;"  for="">Chọn Nhãn Hàng : <span style="color:red">*</span></label>
                        <input id="ma_brand" name='ma_brand' value='' ></div>
                        <input type='submit' name='fix_spham' value='Update sản  Phẩm' >
                      </form>
                  </div>
                </div> 