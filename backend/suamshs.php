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
	<title>SỬA MÃ SỐ HỒ SƠ </title>
</head>
<body>
	<p style="font-size: 30px; color: blue;">SỬA MÃ SỐ HỒ SƠ</p>
	<button><a href="themmshs.php">THÊM MÃ SỐ HỒ SƠ</a></button>
	<button><a href="hienthimshs.php">XEM DANH SÁCH MÃ SỐ HỒ SƠ</a></button>
	<button><a href="index2.php">TRỞ VỀ TRANG CHỦ</a></button>
	<form action="suamshs.php" method="post">
		<table>
			<tr>
				<td colspan="2">NHẬP MÃ SỐ HỒ SƠ VÀO Ô TRỐNG ĐỂ TÌM KIẾM VÀ SỬA</td>
			</tr>	
			<tr>
				<td>Mã số hồ sơ :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="timkiem" value="TÌM KIẾM VÀ SỬA"></td>
			</tr>
		</table>

	</form>
	
	<?php 
		if (isset($_POST["timkiem"])) {
		require_once("lib/connection.php");
		$username = $_POST["username"];
		$sql = "SELECT * FROM MSHS WHERE MSHS12 = '$username'";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?>
	 <form action="suamshs.php" method="post">
	 <table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td>TIÊU ĐỀ</td>
			<td>NỘI DUNG CŨ</td>
			<td>NHẬP NỘI DUNG MỚI</td>
		</tr>
		</thead>
		<tr>
		<td>MÃ SỐ HỒ SƠ: </td>
		<td><?php echo $row['MSHS12']; ?></td>
		<td><input type="text" id="usernames" name="usernames" value="<?php echo $row['MSHS12']; ?>" readonly></td>
	</tr>
	<tr>
		<td>HỌ VÀ TÊN: </td>
		<td><?php echo $row['tenhs']; ?></td>
		<td><input type="text" id="pass" name="pass" value="<?php echo $row['tenhs']; ?>"></td>
	</tr>
	<tr>
		<td>GIỚI TÍNH: </td>
		<td><?php echo $row['gioitinhhs']; ?></td>
		<td><input type="text" id="name" name="name" value="<?php echo $row['gioitinhhs']; ?>"></td>
	</tr>
	<tr>
		<td>NGÀY SINH: </td>
		<td><?php echo $row['ngaysinhhs']; ?></td>
		<td><input type="text" id="email" name="email" value="<?php echo $row['ngaysinhhs']; ?>"></td>
	</tr>
	<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="SỬA"></td>
	</tr>
	<?php 
		}
	} else{
		echo "MÃ SỐ HỒ SƠ KHÔNG ĐÚNG HOẶC CHƯA NHẬP MÃ SỐ HỒ SƠ";
	}
}

	 ?>
	<?php 
		if (isset($_POST["btn_submit"])) {
		require_once("lib/connection.php");

			$ten = $_POST["pass"];
			$MSHS = $_POST["usernames"];
 			$gioitinh = $_POST["name"];
  			$ngaysinh = $_POST["email"];
  			$sql23 = "UPDATE `MSHS` SET tenhs = '$ten', gioitinhhs = '$gioitinh', ngaysinhhs = '$ngaysinh' where MSHS12 = '$MSHS'";
	    					
			$query1 = mysqli_query($conn, $sql23);
			
			$sql234 = "UPDATE `users` SET hovaten = '$ten', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh' where MSHS = '$MSHS'";
	    					
			$query1234 = mysqli_query($conn, $sql234);
			echo "chúc mừng bạn đã sửa thông tin hồ sơ thành công";
		}
	

	
	?>

	
	

</table>
</form>
</body>
</html>