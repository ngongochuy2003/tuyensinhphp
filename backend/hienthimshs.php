<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {
if($_SESSION['level']!=3) {
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
	<p style="font-size: 30px; color: blue;">BẢNG THỐNG KÊ CÁC MÃ SỐ HỒ SƠ</p>
	<button><a href="themmshs.php">THÊM MÃ SỐ HỒ SƠ</a></button>
	<button><a href="xoamshs.php">XÓA MÃ SỐ HỒ SƠ</a></button>
	<button><a href="suamshs.php">SỬA MÃ SỐ HỒ SƠ</a></button>
	<button><a href="index2.php">TRỞ VỀ TRANG CHỦ</a></button>
	<div style="height: 30px;"></div>
	<table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td>ID</td>
			<td>MSHS</td>
			<td>HỌ TÊN HỌC SINH</td>
			<td>GIỚI TÍNH HỌC SINH</td>
			<td>NGÀY SINH HỌC SINH</td>
		</tr>
		</thead>
	<?php 
		require_once("lib/connection.php");
		$sql = "SELECT * FROM `MSHS`";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?>
	 <tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['MSHS12']; ?></td>
			<td><?php echo $row['tenhs']; ?></td>
			<td><?php echo $row['gioitinhhs']; ?></td>
			<td><?php echo $row['ngaysinhhs']; ?></td>
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