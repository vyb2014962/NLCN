
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="../js/app.js"></script>
<?php
     require("../connection.php");



$sql = "SELECT * FROM thanh_pho";
$result = mysqli_query($conn, $sql);

if (isset($_POST['add_sale'])) {
    echo "<pre>";
    print_r($_POST);
    die();
}
?>



      
     
      <div  class="address-form">
        <div class="address-form-content">
          <h2>Chọn địa Chỉ Nhận Hàng <span id="address-close" onclick="formclose()">X Đóng</span></h2>
            <form action="">
              <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
              <select id="province" name="province" class="form-control">
                            <option value="">Chọn một tỉnh</option>
                            <!-- populate options with data from your database or API -->
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['tp_ma'] ?>"><?php echo $row['tpho_ten'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
              <select id="district" name="district" class="form-control">
                            <option value="">Chọn một quận/huyện</option>
                        </select>
              <select id="wards" name="wards" class="form-control">
                            <option value="">Chọn một xã</option>
                        </select>
              <input type="text" placeholder="số nhà tên đường ">
              <button>Xác Nhận</button>
            </form>
        </div>
      </div>
