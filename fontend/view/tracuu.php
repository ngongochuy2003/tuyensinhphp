
<!DOCTYPE html>
<html>
<head>
	<title>TÌM KIẾM </title>
</head>
<body bgcolor="#CAFFFF">
<center><img src="/myapp/btnhom/fontend/view/images/nhom.jpg"  width = 800px  height = 300px ></center>
	<div style="height: 30px"></div>
	<p style="font-size: 30px; color: blue;" align="center">Tìm kiếm hồ sơ</p>
	<button style="margin: 0 0 0 550px"><a href="indexuser.php">TRỞ VỀ TRANG CHỦ</a></button>
	

	<form action="tracuu.php" method="post">
		<table align="center">
			<tr>
				<td colspan="2">NHẬP MÃ SỐ HỒ SƠ VÀO Ô TRỐNG ĐỂ TÌM KIẾM</td>
			</tr>	
			<tr>
				<td>Mã số hồ sơ :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="timkiem" value="TÌM KIẾM"></td>
			</tr>
		</table>

	</form>
	
	<?php 
		if (isset($_POST["timkiem"])) {
		require_once("connection.php");
		$username = $_POST["username"];
		$sql = "SELECT * FROM users WHERE MSHS = '$username'";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?>
	  <table border="1px" cellpadding="5px" style="font-size: 30px; color: blue;">
		<thead>
		<tr>
			<td></td>
			<td></td>
		</tr>
		</thead>
	<tr>
		<td><div style="height: 20px;"></div>MÃ SỐ HỒ SƠ: <div style="height: 20px;"></div></td>
		<td><div style="height: 20px;"></div><?php echo $row['MSHS']; ?><div style="height: 20px;"></div></td>
	</tr>
	<tr>
		<td><div style="height: 20px;"></div>HỌ VÀ TÊN: <div style="height: 20px;"></div></td>
		<td><div style="height: 20px;"></div><?php echo $row['hovaten']; ?><div style="height: 20px;"></div></td>
	</tr>
	<tr>
		<td><div style="height: 20px;"></div>GIỚI TÍNH: <div style="height: 20px;"></div></td>
		<td><div style="height: 20px;"></div><?php echo $row['gioitinh']; ?><div style="height: 20px;"></div></td>
	</tr>
	<tr>
		<td><div style="height: 20px;"></div>NGÀY SINH: <div style="height: 20px;"></div></td>
		<td><div style="height: 20px;"></div><?php echo $row['ngaysinh']; ?><div style="height: 20px;"></div></td>
	</tr>
	<tr>
		<td><div style="height: 20px;"></div>NƠI Ở HIỆN TẠI: <div style="height: 20px;"></div></td>
		<td><div style="height: 20px;"></div><?php echo $row['noio']; ?><div style="height: 20px;"></div></td>
	</tr>
	<tr>
		<td><div style="height: 20px;"></div>TRẠNG THÁI <div style="height: 20px;"></div></td>
		<td><div style="height: 20px;">ĐĂNG KÍ THÀNH CÔNG</td>
	</tr>
	
	
	<?php 
		}
	} else{
		echo "MÃ SỐ HỒ SƠ KHÔNG ĐÚNG HOẶC CHƯA NHẬP MÃ SỐ HỒ SƠ";
	}
}

	 ?>

</table>
</body>
</html>
 </body>
 </html>