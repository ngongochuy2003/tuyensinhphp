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
	<title>TÌM KIẾM </title>
</head>
<body>
	<p style="font-size: 30px; color: blue;">PHIẾU ĐĂNG KÍ NHẬP HỌC - Đại học Công nghệ đông á</p>
	<form action="in.php" method="post">
		<table>
			<tr>
				<td>Mã số hồ sơ :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="timkiem" value="THÔNG TIN HỌC SINH"></td>
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
	 <table cellpadding="5px">
		<thead>
		<tr>
			<td></td>
			<td></td>
		</tr>
		</thead>
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
	<tr>
		<td>NƠI SINH: </td>
		<td><?php echo $row['noisinh']; ?></td>
	</tr>
	<tr>
		<td>DÂN TỘC: </td>
		<td><?php echo $row['dantoc']; ?></td>
	</tr>
	<tr>
		<td>HỘ KHẨU THƯỜNG TRÚ: </td>
		<td><?php echo $row['hokhau']; ?></td>
	</tr>
	<tr>
		<td>NƠI Ở HIỆN TẠI: </td>
		<td><?php echo $row['noio']; ?></td>
	</tr>
	<tr>
		<td>TÊN BỐ: </td>
		<td><?php echo $row['tenbo']; ?></td>
	</tr>
	<tr>
		<td>NGÀY SINH (BỐ): </td>
		<td><?php echo $row['ngaysinhbo']; ?></td>
	</tr>
	<tr>
		<td>NGHỀ NGHIỆP (BỐ): </td>
		<td><?php echo $row['nghebo']; ?></td>
	</tr>
	<tr>
		<td>SĐT (BỐ): </td>
		<td><?php echo $row['sdtbo']; ?></td>
	</tr>
	<tr>
		<td>TÊN MẸ: </td>
		<td><?php echo $row['tenme']; ?></td>
	</tr>
	<tr>
		<td>NGÀY SINH (MẸ): </td>
		<td><?php echo $row['ngaysinhme']; ?></td>
	</tr>
	<tr>
		<td>NGHỀ NGHIỆP (MẸ): </td>
		<td><?php echo $row['ngheme']; ?></td>
	</tr>
	<tr>
		<td>SĐT (MẸ): </td>
		<td><?php echo $row['sdtme']; ?></td>
	</tr>
	<tr>
		<td style="height: 20px;"></td>
		<td style="height: 20px;"></td>
	</tr>
	</table>
	<table border="1px" cellpadding="5px">
	<tr>
		<td>NGƯỜI LÀM ĐƠN</td>
		<td>ĐẠI DIỆN BAN TUYỂN SINH</td>
	</tr>
	<tr>
		<td style="height: 100px;"></td>
		<td style="height: 100px;"></td>
	</tr>
	
	<?php 
		}
	} else{
		echo "MÃ SỐ HỒ SƠ KHÔNG ĐÚNG HOẶC CHƯA NHẬP MÃ SỐ HỒ SƠ";
	}
}

	 ?>

</table>
<div style="height: 600px;"></div>
<a href="index2.php"><button>TRỞ VỀ TRANG CHỦ</button></a>
<p>Nhập Mã số hồ sơ vào ô trống rồi bấm nút "tìm kiếm" sau đó: </p>
	<p>Nhấn tổ hợp phím "ctlr + P" để in phiếu đăng kí nhập học sau đó yêu cầu PHHS kí vào mục người làm đơn</p>
</body>
</html>