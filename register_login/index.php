<?php
    include 'server.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">

</head>
<body>
	<div class="container">
       
		<div class="row">
			<a href="register.php" class="btn btn-success">Đăng ký thành viên</a>
		</div>
        <div class="row">
			<a href="login.php" class="btn btn-success">Đăng nhập</a>
		</div>
		<div class="row">
         
			<?php
			if(isset($_GET["page"]) && $_GET["page"] == "register")
				include "register.php";
			?>
		</div>

	</div>
</body>
</html>
