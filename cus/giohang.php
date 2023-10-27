<section class="cart">
    <div class="container">
       <div class="cart-top-wrap">
         <div class="cart-top">
            <div class="cart-top-cart cart-top-item">
                <i class="fa-solid fa-cart-shopping "></i>
            </div>
            <div class="cart-top-address cart-top-item">
                <i   class="fa-solid fa-location-pin "></i>
            </div>
            <div class="cart-top-payment cart-top-item ">
            <i  class="fa-solid fa-money-check "></i>
            </div>
        </div>
       </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng </th>
                        <th>Giá</th>
                        <th>Thành Tiền</th>
                        <th>Xóa </th>
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
                        <td><img src='<?php echo $cart_item['hinhanh'] ?>' alt=""></td>
                        <td><p><?php echo $cart_item['tensanpham'] ?></p></td>
                        <td>
                            <a style="color:black;"href="../cus/themgiohang.php?cong=<?php echo $cart_item['id'];?>"><i class="fa-solid fa-plus"></i> </a>
                        <?php echo $cart_item['soluong'] ?>
                    
                            <a style="color:black;"href="../cus/themgiohang.php?tru=<?php echo $cart_item['id'];?>"><i class="fa-solid fa-minus"></i></a>
                    
                    
                    </td>
                        <td><p><?php echo number_format($cart_item['gia'],0,',','.' ).'vnđ'?> <sup>đ</sup></p></td>
                        <td><p><?php echo number_format($tien,0,',','.' ).'vnđ' ?> <sup>đ</sup></p></td>
                       <td><a style="color:red" href="../cus/themgiohang.php?xoa=<?php echo $cart_item['id'];?>"><span  >X</span></a></td>
                    </tr>
                      <?php
                        }

                      }else{
                            
                      
                    ?>
                    <tr>
                         <td colspan="6">Đơn hàng Không có Sản Phẩm</td>
                    </tr>
                    <?php

                      }?>
                </table>
            </div>
             <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">Tổng Tiền Giỏ Hàng</th>
                    </tr>
                    <tr>
                        <td>Tổng Sản Phẩm</td>
                        <?php
                        echo"<td>$price_total</td>";

                        ?>
                    </tr>
                    <tr>
                        <td>Tổng Tiền Hàng</td>
                        <?php
                        echo"<td><p>$tongtien<sup>đ</sup></p></td>";

                        ?>
                    </tr>
                    <tr>
                        <td>Tạm Tính</td>
                        <?php
                     echo"   <td><p  style='color:black;font-weight: bold;' >$tongtien <sup>đ</sup></p></td>";
                        ?>
                    </tr>
                </table>
                <!-- <div class="cart-content-right-text">
                    <p>Bạn sẽ được miễn phí ship khi đơn hàng có tổng giá trị trên 20.000.000đ</p>
                    <p style="color:red;font-weiht:bold'">Mua thêm <span style="font-size:18px;"> 3.000.000đ </span> đễ được miễn phí ship </p>
                </div> -->
                <div style="padding-top:20px" class="cart-content-right-button">
                   <a href="../cus/shop.php"> <button>Tiếp Tục Mua sắm</button></a>
                  <a  href="../cus/cart.php?product=delivery">  <button>Thanh toán</button></a>
                </div>
                <div class="cart-content-right-dangnhap">
                    <p>Tài kHoản cá nhân</p><br>
                    <p>Hãy <a style="color:black;"href="">Đăng Nhập </a>Tài khoản để được tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
  </section> 