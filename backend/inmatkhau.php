<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {
if($_SESSION['level']!=4) {
    header("location:login.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>IN PHIẾU BÁO MẬT KHẨU</title>
</head>
<body>
	 <form action="inmatkhau.php" method="post">
		<table>
			<tr>
				<td colspan="2">NHẬP MÃ SỐ HỒ SƠ VÀO Ô TRỐNG ĐỂ IN MẬT KHẨU</td>
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
		require_once("lib/connection.php");
		$username = $_POST["username"];
		$sql = "SELECT * FROM users WHERE MSHS = '$username'";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?>
	 <div style="height: 50px;"></div>
	 <table style="font-size: 30px;">
	 	<tr>
		<td>MÃ SỐ HỒ SƠ: </td>
		<td><?php echo $row['MSHS']; ?></td>
		
	</tr>
	<tr>
		<td>HỌ VÀ TÊN: </td>
		<td><?php echo $row['hovaten']; ?></td>
		
	</tr>
	<tr>
		<td>GIỚI TÍNH: </td>
		<td><?php echo $row['gioitinh']; ?></td>
		
	</tr>
	<tr>
		<td>NGÀY SINH: </td>
		<td><?php echo $row['ngaysinh']; ?></td>
		
	</tr>
	 </table>
	 <div style="height: 50px;"></div>
	 <div style="font-size: 50px;">THÔNG TIN ĐĂNG NHẬP</div>
	 <div style="height: 50px;"></div>
	 <table border="1px" cellpadding="5px">
	 	<tr>
	 		<td style="color: blue; font-size: 20px;">MẬT KHẨU: </td>
	 		<td style="color: red; font-size: 50px;"><?php echo $row['matkhau']; ?></td>
	 	</tr>
	 </table>
<?php
}
}
}

?>
<div style="height: 800px;"></div>
<button><a href="index2.php">TRỞ VỀ</a></button><br>
<div style="height: 30px;"></div>
<div style="height: 30px;"></div>
</body>
</html>