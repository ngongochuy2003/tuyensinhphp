<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {

    header("location:logints.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>HIỂN THỊ </title>
</head>
<body>
	<p style="font-size: 30px; color: blue;">DANH SÁCH TÀI KHOẢN ADMIN</p>
	<button><a href="themadmints.php">THÊM TÀI KHOẢN</a></button>
	<button><a href="Home.php">TRỞ VỀ</a></button>
	<div style="height: 30px;"></div>
	<table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td>ID</td>
			<td>TÊN ĐĂNG NHẬP</td>
			<td>MẬT KHẨU</td>
			<td>LEVEL</td>
			
		</tr>
		</thead>
	<?php 
		require_once("lib/config.php");
		$sql = "SELECT * FROM `admints`";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?>
	 <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['tendangnhap']; ?></td>
			<td><?php echo $row['matkhau']; ?></td>
			<td><?php echo $row['level']; ?></td>
		
	</tr>
	
	<?php 
		}
	} else{
		echo "KHÔNG CÓ DỮ LIỆU";
	}

	 ?>

</table>
<div style="color: red;">LEVEL 1: TẤT CẢ MỌI CHỨC NĂNG</div>
<div style="color: red;">LEVEL 2: THÊM, XEM, TRA CỨU HỒ SƠ</div>
<div style="color: red;">LEVEL 3: THÊM, XEM, TRA CỨU, SỬA, XÓA MÃ SỐ HỒ SƠ</div>
<div style="color: red;">LEVEL 4: IN PHIẾU ĐĂNG KÍ NHẬP HỌC, IN PHIẾU MẬT KHẨU</div>
</body>
</html>