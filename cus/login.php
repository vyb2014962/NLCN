
<?php
	//Gọi file connection.php ở bài trước
    include('../connection.php');
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];

	
		if ($username == "" || $password =="") {
			echo '<script type="text/javascript">
			window.onload = function () { alert("username hoặc password bạn không được để trống!");}
				</script>';
		}else{
            $query = "select * from custormer where user_ten = '$username' and  user_mk= '$password' ";
            $q_result = mysqli_query($conn, $query) 
            or die("Query failed: " . mysqli_error($conn));
			$num_rows = mysqli_num_rows($q_result);
			if ($num_rows > 0) {
				$row_data=mysqli_fetch_array($q_result);
		

                $_SESSION['dangnhap'] = $row_data['user_email'];
       
                header('Location: ../cus/cart.php');
			}else{
                 echo '<script type="text/javascript">

            window.onload = function () { alert("tên đăng nhập hoặc mật khẩu không đúng !"); }

</script>';
			}
		}
	}
?>

