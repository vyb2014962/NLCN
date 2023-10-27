<header>
 <?php
include './login.php';
 include './cart2.php'
 ?>
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
            <td colspan="2" align="right" style="padding-top:5px"><a  style="opacity:0.6;"href=""> Đăng ký tại đây</a></td>
          </tr>
	    		<tr>
	    			<td colspan="2" align="center" > <input class="login-input" name="btn_submit" type="submit" value="Đăng nhập" style="width:40%;margin-left:30px"></td>
	    		</tr>
          
	    	</table>
		</form>
</div>
</div>
       
  </header>