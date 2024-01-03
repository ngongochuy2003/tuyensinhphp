<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {
if($_SESSION['level']!=2) {
    header("location:login.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HIỂN THỊ </title>
</head>
<body>
	<p style="font-size: 30px; color: blue;">BẢNG THỐNG KÊ CÁC HỒ SƠ</p>
	<button><a href="register.php">THÊM HỒ SƠ</a></button>
	<button><a href="timkiem.php">TÌM KIẾM HỒ SƠ</a></button>
	<button><a href="hienthi.php">CẬP NHẬT LẠI DANH SÁCH</a></button>
	<button><a href="Home.php">TRỞ VỀ TRANG CHỦ</a></button>
	<div style="height: 30px;"></div>
	<table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td>ID</td>
			<td>MSHS</td>
			<td>TÊN HỌC SINH</td>
			<td>GIỚI TÍNH</td>
			<td>NGÀY SINH</td>
			<td>MẬT KHẨU</td>
			<td>HÌNH THỨC ĐĂNG KÍ</td>
		</tr>
		</thead>
	<?php 
		require_once("lib/connection.php");
		$sql = "SELECT * FROM `users`";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?>
	 <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['MSHS']; ?></td>
			<td><?php echo $row['hovaten']; ?></td>
			<td><?php echo $row['gioitinh']; ?></td>
			<td><?php echo $row['ngaysinh']; ?></td>
			<td><?php echo $row['matkhau']; ?></td>
			<td><?php echo $row['hinhthucdangki']; ?></td>
	</tr>
	
	<?php 
		}
	
	} else{
		echo "KHÔNG CÓ DỮ LIỆU";
	}

	 ?>

</table>
</body>
</html>