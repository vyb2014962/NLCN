
    <section class="delivery">
    <div class="container">
       <div class="delivery-top-wrap">
         <div class="delivery-top">
            <div class="delivery-top-cart delivery-top-item">
                <i class="fa-solid fa-cart-shopping "></i>
            </div>
            <div class="delivery-top-address delivery-top-item">
                <i   class="fa-solid fa-location-pin "></i>
            </div>
            <div class="delivery-top-payment delivery-top-item ">
            <i  class="fa-solid fa-money-check "></i>
            </div>
        </div>
       </div>
    </div>
    <div class="container">
      <div class="delivery-content row">
        <div class="delivery-content-left">
             <p>Vui lòng chọn địa chỉ giao hàng</p>
             <div class="delivery-content-left-dangnhap row">
              <i class="fa-solid fa-right-to-bracket"></i>
              <p>Đăng Nhập (Nếu đã có tài khoản của Shop)</p>
             </div>
             <div class="delivery-content-left-khachle row">
              <input checked name="loaikhach" type="radio" >
              <p><span style="font-weight:bold;">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)</p>
             </div>
             <div class="delivery-content-left-dangky row">
              <input   type="radio" >
              <p><span style="font-weight:bold;">Đăng ký</span> (tạo Tài khoản mới với thông tin bên dưới)</p>
             </div>
             <div class="delivery-content-left-input-top row">
              <div class="delivery-content-left-input-top-item">
                <label for="">Họ Tên <span style="color:red;">*</span></label>
                <input type="text">
              </div>
              <div class="delivery-content-left-input-top-item">
                <label for="">Điện thoại <span style="color:red;">*</span></label>
                <input type="text">
              </div>
              <div class="delivery-content-left-input-top-item">
                <label for="">Tỉnh/Tp <span style="color:red;">*</span></label>
                <input type="text">
              </div>
              <div class="delivery-content-left-input-top-item">
                <label for="">Quận/Huyện <span style="color:red;">*</span></label>
                <input type="text">
              </div>
           
             </div>
             <div class="delivery-content-left-input-bottom">
               <label for="">Phường/Xã <span style="color:red;">*</span></label>
                <input type="text">
             </div>
             <div class="delivery-content-left-input-bottom">
               <label for="">Địa chỉ <span style="color:red;">*</span></label>
                <input type="text">
             </div>
            <div class="delivery-content-left-button row">
              <a style="color:#0db7ea"href="../cus/cart.php"><span>&#171;;</span><p>Quay lại Giỏ Hàng</p></a>
            <?php
            if(isset($_SESSION['dangnhap'])){
              ?>

             <a href="../cus/cart.php?product=payment"> <button><p style="font-weght:bold;">Thanh Toán Và Giao Hàng</p></button></a>

              <?php
            }else{
              ?>

               <a href="../cus/Register.php"> <button><p style="font-weght:bold;">Đăng Nhập để đăt hàng</p></button></a>
            <?php
            }
            ?>



            </div>
        </div>
         <div class="delivery-content-right">
          <table>
            <tr>
              <th>Tên sản Phẩm</th>
              <th>Số Lượng</th>
              <th>Thành Tiền</th>
            </tr>

             <?php
                             $tongtien=0;
                            $price_total=0;
                    if(isset($_SESSION['cart'])){
                           
                        foreach($_SESSION['cart']as $cart_item){
                            $cart_item['gia']=intval(str_replace(".", "", $cart_item['gia']));
                     
                            $price_total+=$cart_item['soluong'];
                            $tien=$cart_item['soluong']*$cart_item['gia'];
                                   $tongtien+=$tien;
                    ?>
            <tr>
                    <td><p><?php echo $cart_item['tensanpham'] ?></p></td>
                      <td><?php echo $cart_item['soluong'] ?></td>
             
            <td><p><?php echo number_format($tien,0,',','.' ).'vnđ' ?> <sup>đ</sup></p></td>
            </tr>

<?php
                        }

                      }?>
                  <tr>
              <td style="font-weight:bold;font-size:20px;" >Tổng Tiền Hàng</td>
              <td style="font-weight:bold;" > <?php
                     echo"   <td><p  style='color:black;font-weight: bold;font-size:20px;' >$tongtien <sup>đ</sup></p></td>";
                        ?></td>
                 </tr>



          </table>
        </div>
      </div>
              
    </div>
</section> 