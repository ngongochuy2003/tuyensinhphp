<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {

    header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>THỐNG KÊ </title>
</head>
<body>
	<p style="font-size: 30px; color: blue;">THỐNG KÊ DỮ LIỆU</p>
	<button><a href="register.php">THÊM HỒ SƠ</a></button>
	<button><a href="timkiem.php">TÌM KIẾM HỒ SƠ</a></button>
	<button><a href="thongke.php">CẬP NHẬT LẠI DANH SÁCH</a></button>
	<button><a href="Home.php">TRỞ VỀ TRANG CHỦ</a></button>
	<div style="height: 30px;"></div>
	<div style="font-size: 40px; color: green;"> BẢNG THỐNG KÊ THÔNG TIN HỒ SƠ</div>
	<div style="height: 30px;"></div>
	<table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td style="font-size: 25px; color: blue;">TỔNG SỐ HỌC SINH</td>
			<td style="font-size: 25px; color: blue;">TỔNG SỐ HỌC SINH NAM</td>
			<td style="font-size: 25px; color: blue;">TỔNG SỐ HỌC SINH NAM</td>
			<td style="font-size: 25px; color: blue;">SỐ HỌC SINH DÂN TỘC</td>
			
		</tr>
		</thead>
	<?php 
		require_once("lib/connection.php");
		$sql = "SELECT * FROM `users`";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		$sql1 = "SELECT * FROM `users` where gioitinh = 'Nam'";
		$query1 = mysqli_query($conn, $sql1);
		$num1 = mysqli_num_rows($query1);
		$sql2 = "SELECT * FROM `users` where gioitinh = 'Nữ'";
		$query2 = mysqli_query($conn, $sql2);
		$num2 = mysqli_num_rows($query2);
		$sql3 = "SELECT * FROM `users` where dantoc = 'Kinh'";
		$query3 = mysqli_query($conn, $sql3);
		$num3 = mysqli_num_rows($query3);
		$num4 = $num - $num3
		
	
	 ?>
	 <tr>
			<td style="font-size: 30px; color: red;"><?php echo $num;?> HỌC SINH</td>
			<td style="font-size: 30px; color: red;"><?php echo $num1;?> HỌC SINH NAM</td>
			<td style="font-size: 30px; color: red;"><?php echo $num2;?> HỌC SINH NỮ</td>
			<td style="font-size: 30px; color: red;"><?php echo $num4;?> HỌC SINH DÂN TỘC</td>
			
	</tr>
</table>
<div style="height: 30px;"></div>
<div style="font-size: 40px; color: green;"> BẢNG THỐNG KÊ SỐ LƯỢNG HỒ SƠ</div>
<div style="height: 30px;"></div>
	<table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td style="font-size: 25px; color: blue;">TỔNG SỐ HỒ SƠ ĐĂNG KÍ TRỰC TIẾP</td>
			<td style="font-size: 25px; color: blue;">TỔNG SỐ HỒ SƠ ĐĂNG KÍ TRỰC TUYẾN</td>
			<td style="font-size: 25px; color: blue;">TỔNG SỐ HỒ SƠ ĐĂNG KÍ</td>
		
			
		</tr>
		</thead>
	<?php 
		require_once("lib/connection.php");
		$sqla = "SELECT * FROM `users` where hinhthucdangki ='Đăng kí trực tiếp'";
		$querya = mysqli_query($conn, $sqla);
		$numa = mysqli_num_rows($querya);
		$sql1a = "SELECT * FROM `users` where hinhthucdangki ='Đăng kí trực tuyến'";
		$query1a = mysqli_query($conn, $sql1a);
		$num1a = mysqli_num_rows($query1a);
		$tong = $numa + $num1a;
		
		
	
	 ?>
	 <tr>
			<td style="font-size: 30px; color: red;"><?php echo $numa;?> HỒ SƠ TRỰC TIẾP</td>
			<td style="font-size: 30px; color: red;"><?php echo $num1a;?> HỒ SƠ TRỰC TUYẾN</td>
			<td style="font-size: 30px; color: red;"><?php echo $tong;?> HỒ SƠ ĐĂNG KÍ</td>
			
		
			
	</tr>
</table>
</body>
</html>