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
	<title>XÓA MÃ SỐ HỒ SƠ </title>
</head>
<body>
	<p style="font-size: 30px; color: blue;">XÓA MÃ SỐ HỒ SƠ</p>
	<button><a href="themmshs.php">THÊM MSHS</a></button>
	<button><a href="hienthimshs.php">XEM DANH SÁCH MSHS</a></button>
	<button><a href="index2.php">TRỞ VỀ TRANG CHỦ</a></button>
	<form action="xoamshs.php" method="post">
		<table>
			<tr>
				<td colspan="2">NHẬP MÃ SỐ HỒ SƠ VÀO Ô TRỐNG ĐỂ TÌM KIẾM VÀ XÓA</td>
			</tr>	
			<tr>
				<td>Mã số hồ sơ :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="timkiem" value="TÌM KIẾM VÀ XÓA"></td>
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
	 <form action="xoamshs.php" method="post">
	 <table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td>TIÊU ĐỀ</td>
			<td>NỘI DUNG</td>
			
		</tr>
		</thead>
		<tr>
		<td>MÃ SỐ HỒ SƠ: </td>
		<td><input type="text" id="usernames" name="usernames" value="<?php echo $row['MSHS12']; ?>" readonly></td>
	</tr>
	<tr>
		<td>TÊN HỌC SINH: </td>
		<td><input type="text" id="usernames1" name="usernames1" value="<?php echo $row['tenhs']; ?>"></td>
	</tr>
	<tr>
		<td>GIỚI TÍNH HỌC SINH: </td>
		<td><input type="text" id="usernames2" name="usernames2" value="<?php echo $row['gioitinhhs']; ?>"></td>
	</tr>
	<tr>
		<td>NGÀY SINH HỌC SINH: </td>
		<td><input type="text" id="usernames3" name="usernames3" value="<?php echo $row['ngaysinhhs']; ?>"></td>
	</tr>
	
	<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="XÓA"></td>
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
        	$MSHS = $_POST["usernames"];
 			$sql234 = "SELECT * FROM `users` WHERE MSHS = '$MSHS'";
	    	$query12 = mysqli_query($conn, $sql234);
			$num2 = mysqli_num_rows($query12);
		    if ($num2 > 0) {
		        echo "Mã Số Hồ Sơ Đã Đăng Kí Trên Hệ Thống Tuyến Sinh, Bạn Không Thể Xóa";
		    }else{
			$MSHS = $_POST["usernames"];
 			$sql23 = "DELETE FROM `MSHS` WHERE (MSHS12 = '$MSHS')";
	    					
			$query1 = mysqli_query($conn, $sql23);
			echo "chúc mừng bạn đã XÓA thông tin hồ sơ thành công";
		}
		}
	

	
	?>

	
	

</table>
</form>
</body>
</html>