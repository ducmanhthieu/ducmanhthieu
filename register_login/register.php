<?php 
    include('server.php');

    if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
        // thực hiện khi người dùng nhập đủ thông tin 
                $username = $_POST["username"];
                $password = $_POST["password"];
                $repassword = $_POST["repassword"];
                $Lop = 0;
                if($password != $repassword){
                    header("location:register.php");
                }
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $old = mysqli_query($conn,$sql);
                $password = md5($password);
                if(mysqli_num_rows($old) >0){
                    header("location:register.php");
                }
        
                $sql = "INSERT INTO `user`(`username`, `password`, `Lop`) VALUES ('$username','$password','$Lop')";
                $query=mysqli_query($conn,$sql);
                if($query){
                    header("location:login.php");
                }

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Đăng ký tài khoản</h2>
	</div>

	<form method="post" action="register.php">
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
				<td>Nhập lại mật khẩu </td>
				<td><input type = "password" name = "repassword"></td>
            </tr>
			<tr>
				<td colspan="2">
					<button type = "submit" name = "submit">Đăng ký</button>
					<button type = "reset " name = "reset">Reset</button>
				</td>
			</tr>		
		</table>
		<p>
		<p>
			Đã có tài khoản? <a href="login.php">Đăng nhập</a>
		</p>
	</form>
</body>
</html>