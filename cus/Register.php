<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cus.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Rowan</title>
</head>
<body>
  <header>
    <ul>
        <li><a href=""><img src="../img/logo1.webp"></a></li>
        <li><a href="#" onclick="formlogin()"><button>Đăng Nhập<i class="fa-solid fa-lock" style="padding-left:5px"></i></button></a>
        
        </li>

    </ul>
    <div  class="login-form">
    <div class="login-form-content">
	<form method="POST" action="shop.php">
	    <h2>Đăng nhập<span onclick="formlogout()">X Đóng</span></h2>
	    	<table>
	    		<tr>
	    			<td style="padding-top:20px;padding-right:10px">Username</td>
	    			<td><input type="text" name="username" size="30" ></td>
	    		</tr>
	    		<tr>
	    			<td style="padding-top:20px;padding-right:10px">Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
           <tr>
            <td colspan="2" align="right" style="padding-top:5px"><a  style="opacity:0.8;"href=""> Đăng ký tại đây</a></td>
          </tr>
	    		<tr>
	    			<td colspan="2" align="center" > <input class="login-input" name="btn_submit" type="submit" value="Đăng nhập" style="width:40%;margin-left:30px"></td>
	    		</tr>
          
	    	</table>
		</form>
</div>
</div>
       
  </header>
  <nav>
   <div class="container">
    <ul>
      <li><a href="shop.php"><img style="width: 150px; height:60px" src="../img/logo-start.webp"></a></li>
         <li  onclick="formid()"><a href="#">Cần Thơ <i class="fa-solid fa-sort-down"></i></a></li>
      
         <form name="s_form" action="" method="post">
   
        <input type="text" name="search_kw" id="search_kw" size="20"  
               value='<?php empty($_POST['search_kw']) || print $_POST['search_kw'];?> '> 
        
          <input type="submit"  value="search"   > 
    </form>
      <li><a href="../cus/cart.php"><button><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</button></li></a>
      <li><a href="">Lịch Sử <br> Đơn Hàng</a></li>
      <li><a href=""><span class="btn-content"><span class="btn-black"></span></span>Mua thẻ Nạp Ngay</a></li>
      <li><a href="">24H Công Nghệ</a></li>
      <li><a href="">Hỏi Đáp</a></li>
      <li><a href="">Đăng Ký</a></li>
 
    </ul>
   </div>
  </nav>
  <?php 
include "logo.php"

?>
<?php
session_start();

?>
<?php
    if(isset($_POST['btn_dangky'])){
            require("../connection.php");
        $tenkhachhang=$_POST['username'];
        $email=$_POST['email'];
        $sdt=$_POST['sdt'];
        $password=md5($_POST['password']);



          $query = "INSERT INTO custormer (user_ten,user_mk,user_sdt,user_email)".
                " VALUES ( '$tenkhachhang', '$email'," .
                " $sdt, '$password')";
            
            $q_result = mysqli_query($conn,$query) 
                or die("Couldn't add new entry: " . mysqli_error($conn));
                if($q_result){
                    echo " <p> Bạn đã Đăng ký Thành Công</p>";
                    $_SESSION['dangnhap']= $email;
                    header('location:../cus/cart.php?product=delivery');
                }
    }


?>
<p>Đăng Ký Thành Viên</p>
<style>
    table.dangky tr td{

        padding: 5px;
    }


</style>
<form action="" method="POST" >
<table class="dangky" border="1">
    	<tr>
	    	<td style="padding-top:20px;padding-right:10px">Username</td>
	    	<td><input type="text" name="username" size="50" ></td>
	    </tr>
	    <tr>
	    	<td style="padding-top:20px;padding-right:10px">Email</td>
	     	<td><input type="text" name="email" size="50" ></td>
</tr>
<tr>
	    	<td style="padding-top:20px;padding-right:10px">Số điện thoại</td>
	     	<td><input type="text" name="sdt" size="50" ></td>
</tr>
<tr>
	    	<td style="padding-top:20px;padding-right:10px">Mật khẩu</td>
	     	<td><input type="text" name="password" size="50" ></td>
</tr>
<tr>
	    			<td colspan="2" align="center" > <input  name="btn_dangky" type="submit" value="Đăng ky" style="width:40%;margin-left:30px"></td>
	    		</tr>

</table>
</form>