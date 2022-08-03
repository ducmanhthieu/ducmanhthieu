<?php 
include('server.php');
if( isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

                $sql = "SELECT * FROM user WHERE username ='$username'";
                $query=mysqli_query($conn,$sql);
                $data = mysqli_fetch_assoc($query);
                $check= mysqli_num_rows($query);
                if($check == 1){
                    $password = md5($password);
                    if($password==$data['password']){
                        $_SESSION['user'] = $data;
                        header("location:index.php");
                        
                    }else{
                        echo "Mật khẩu không chính xác";
                    }

                }else{
                    echo "Tên người dùng không chính xác";
                }
                
            }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Đăng nhập </h2>
	</div>

	<form method="post" action="login.php">
    <table>
			<tr>
				<td>Tên người dùng </td>
				<td><input type = "text" name = "username"></td>
			</tr>
			<tr>
				<td>Mật khẩu </td>
				<td><input type = "password" name = "password"></td>
            </tr>
			<tr>
				<td colspan="2">
					<button type = "submit" name = "submit">Đăng Nhập</button>
					<button type = "reset " name = "reset">Reset</button>
				</td>
			</tr>		
		</table>
		<p>
			Chưa có tài khoản? <a href="register.php">Đăng ký</a>
		</p>
	</form>
</body>
</html>