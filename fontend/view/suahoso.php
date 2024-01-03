
<!DOCTYPE html>
<html>
<head>
	<title>SỬA HỒ SƠ </title>
</head>
<body bgcolor="#CAFFFF">
<center><img src="/myapp/btnhom/fontend/view/images/nhom.jpg"  width = 800px  height = 300px ></center>
	<p style="font-size: 30px; color: blue;" align="center">SỬA HỒ SƠ</p>
	<button style="margin: 0 0 0 550px"><a href="indexuser.php">TRỞ VỀ TRANG CHỦ</a></button>
	<form action="suahoso.php" method="post"   >
		<table align="center">
			<tr>
				<td colspan="2">NHẬP MÃ SỐ HỒ SƠ VÀO Ô TRỐNG ĐỂ TÌM KIẾM VÀ SỬA</td>
			</tr>	
			<tr>
				<td>Mã số tuyển sinh :</td>
				<td><input type="text" id="matt" name="matt"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="timkiem" value="TÌM KIẾM VÀ SỬA"></td>
			</tr>
		</table>

	</form>
	
	<!-- <?php 
		if (isset($_POST["timkiem"])) {
		require_once("connection.php");
		$username = $_POST["matt"];
		
		$sql = "SELECT * FROM users WHERE MSHS = '$username'";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if ($num > 0) {
			while ($row = mysqli_fetch_array($query)) {
	
	 ?> -->
	 <form action="suahoso.php" method="post">
	 <table border="1px" cellpadding="5px">
		<thead>
		<tr>
			<td>TIÊU ĐỀ</td>
			<td>NỘI DUNG CŨ</td>
			<td>NHẬP NỘI DUNG MỚI</td>
		</tr>
		</thead>
		<tr>
		<td>MÃ SỐ TUYỂN SINH: </td>
		<td><?php echo $row['MSTS']; ?></td>
		<td><input type="text" id="mats" name="mats" value="<?php echo $row['MSTS']; ?>" readonly></td>
	</tr>
		<tr>
		<td>MÃ SỐ HỒ SƠ: </td>
		<td><?php echo $row['MSHS']; ?></td>
		<td><input type="text" id="usernames" name="usernames" value="<?php echo $row['MSHS']; ?>" readonly></td>
	</tr>
	<tr>
		<td>HỌ VÀ TÊN: </td>
		<td><?php echo $row['hovaten']; ?></td>
		<td><input type="text" id="pass" name="pass" value="<?php echo $row['hovaten']; ?>"></td>
	</tr>
	<tr>
		<td>GIỚI TÍNH: </td>
		<td><?php echo $row['gioitinh']; ?></td>
		<td><input type="text" id="name" name="name" value="<?php echo $row['gioitinh']; ?>"></td>
	</tr>
	<tr>
		<td>NGÀY SINH: </td>
		<td><?php echo $row['ngaysinh']; ?></td>
		<td><input type="text" id="email" name="email" value="<?php echo $row['ngaysinh']; ?>"></td>
	</tr>
	<tr>
		<td>NƠI SINH: </td>
		<td><?php echo $row['noisinh']; ?></td>
		<td><input type="text" id="noisinh" name="noisinh" value="<?php echo $row['noisinh']; ?>"></td>
	</tr>
	<tr>
		<td>DÂN TỘC: </td>
		<td><?php echo $row['dantoc']; ?></td>
		<td><input type="text" id="dantoc" name="dantoc" value="<?php echo $row['dantoc']; ?>"></td>
	</tr>
	<tr>
		<td>HỘ KHẨU THƯỜNG TRÚ: </td>
		<td><?php echo $row['hokhau']; ?></td>
		<td><input type="text" id="hokhau" name="hokhau" value="<?php echo $row['hokhau']; ?>"></td>
	</tr>
	<tr>
		<td>NƠI Ở HIỆN TẠI: </td>
		<td><?php echo $row['noio']; ?></td>
		<td><input type="text" id="noio" name="noio" value="<?php echo $row['noio']; ?>"></td>
	</tr>
	<tr>
		<td>TRƯỜNG HỌC BAN ĐẦU: </td>
		<td><?php echo $row['truongcu']; ?></td>
		<td><input type="text" id="noio" name="truong" value="<?php echo $row['truongcu']; ?>"></td>
	</tr>
	<tr>
		<td>TÊN BỐ: </td>
		<td><?php echo $row['tenbo']; ?></td>
		<td><input type="text" id="tenbo" name="tenbo" value="<?php echo $row['tenbo']; ?>"></td>
	</tr>
	<tr>
		<td>CMND/CCCD BỐ: </td>
		<td><?php echo $row['cmccbo']; ?></td>
		<td><input type="text" id="tenbo" name="cmccbo" value="<?php echo $row['cmccbo']; ?>"></td>
	</tr>
	<tr>
		<td>NGÀY SINH (BỐ): </td>
		<td><?php echo $row['ngaysinhbo']; ?></td>
		<td><input type="text" id="ngaysinhbo" name="ngaysinhbo" value="<?php echo $row['ngaysinhbo']; ?>"></td>
	</tr>
	<tr>
		<td>NGHỀ NGHIỆP (BỐ): </td>
		<td><?php echo $row['nghebo']; ?></td>
		<td><input type="text" id="nghebo" name="nghebo" value="<?php echo $row['nghebo']; ?>"></td>
	</tr>
	<tr>
		<td>SĐT (BỐ): </td>
		<td><?php echo $row['sdtbo']; ?></td>
		<td><input type="text" id="sdtbo" name="sdtbo" value="<?php echo $row['sdtbo']; ?>"></td>
	</tr>
	<tr>
		<td>TÊN MẸ: </td>
		<td><?php echo $row['tenme']; ?></td>
		<td><input type="text" id="tenme" name="tenme" value="<?php echo $row['tenme']; ?>"></td>
	</tr>
	<tr>
		<td>CMND/CCCN MẸ: </td>
		<td><?php echo $row['cmccme']; ?></td>
		<td><input type="text" id="tenme" name="cmccme" value="<?php echo $row['cmccme']; ?>"></td>
	</tr>
	<tr>
		<td>NGÀY SINH (MẸ): </td>
		<td><?php echo $row['ngaysinhme']; ?></td>
		<td><input type="text" id="ngaysinhme" name="ngaysinhme" value="<?php echo $row['ngaysinhme']; ?>"></td>
	</tr>
	<tr>
		<td>NGHỀ NGHIỆP (MẸ): </td>
		<td><?php echo $row['ngheme']; ?></td>
		<td><input type="text" id="ngheme" name="ngheme" value="<?php echo $row['ngheme']; ?>"></td>
	</tr>
	<tr>
		<td>SĐT (MẸ): </td>
		<td><?php echo $row['sdtme']; ?></td>
		<td><input type="text" id="sdtme" name="sdtme" value="<?php echo $row['sdtme']; ?>"></td>
	</tr>
	<tr>
		<td>TÊN NGH: </td>
		<td><?php echo $row['tenngh']; ?></td>
		<td><input type="text" id="tenme" name="tenngh" value="<?php echo $row['tenngh']; ?>"></td>
	</tr>
	<tr>
		<td>CMND/CCCN NGH: </td>
		<td><?php echo $row['cmccngh']; ?></td>
		<td><input type="text" id="tenme" name="cmccngh" value="<?php echo $row['cmccngh']; ?>"></td>
	</tr>
	<tr>
		<td>NGÀY SINH (NGH): </td>
		<td><?php echo $row['ngaysinhngh']; ?></td>
		<td><input type="text" id="ngaysinhme" name="ngaysinhngh" value="<?php echo $row['ngaysinhngh']; ?>"></td>
	</tr>
	<tr>
		<td>NGHỀ NGHIỆP (NGH): </td>
		<td><?php echo $row['nghengh']; ?></td>
		<td><input type="text" id="ngheme" name="nghengh" value="<?php echo $row['nghengh']; ?>"></td>
	</tr>
	<tr>
		<td>SĐT (NGH): </td>
		<td><?php echo $row['sdtngh']; ?></td>
		<td><input type="text" id="sdtme" name="sdtngh" value="<?php echo $row['sdtngh']; ?>"></td>
	</tr>
	<tr>
		<td>Mật Khẩu: </td>
		<td><?php echo $row['matkhau']; ?></td>
		<td><input type="text" id="pass1" name="pass1" value="<?php echo $row['matkhau']; ?>"></td>
	</tr>
		<tr>
		<td>Hình Thức Đăng Kí: </td>
		<td><?php echo $row['hinhthucdangki']; ?></td>
		<td><input type="text" id="pass12" name="pass12" value="<?php echo $row['hinhthucdangki']; ?>" readonly></td>
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
			$mats = $_POST['mats'];
			$ten = $_POST["pass"];
			$pass = $_POST["pass1"];
			$MSHS = $_POST["usernames"];
 			$gioitinh = $_POST["name"];
  			$ngaysinh = $_POST["email"];
  			$noisinh = $_POST["noisinh"];
  			$dantoc = $_POST["dantoc"];
  			$hokhau = $_POST["hokhau"];
  			$noio = $_POST["noio"];
  			$tenbo = $_POST["tenbo"];
  			$cmccbo = $_POST["cmccbo"];
  			$ngaysinhbo = $_POST["ngaysinhbo"];
  			$nghebo = $_POST["nghebo"];
  			$sdtbo = $_POST["sdtbo"];
  			$tenme = $_POST["tenme"];
  			$cmccme = $_POST["cmccme"];
  			$ngaysinhme = $_POST["ngaysinhme"];
  			$ngheme = $_POST["ngheme"];
  			$sdtme = $_POST["sdtme"];
  			$tenngh = $_POST["tenngh"];
  			$cmccngh = $_POST["cmccngh"];
  			$ngaysinhngh = $_POST["ngaysinhngh"];
  			$nghengh = $_POST["nghengh"];
  			$sdtngh = $_POST["sdtngh"];
  			$truong = $_POST['truong'];
  			$b = $_POST["pass12"];
  			$sql23 = "UPDATE `users` SET hovaten = '$ten', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh', noisinh = '$noisinh', dantoc = '$dantoc', hokhau = '$hokhau', noio = '$noio', tenbo = '$tenbo', ngaysinhbo = '$ngaysinhbo', nghebo = '$nghebo', sdtbo = '$sdtbo', tenme = '$tenme', ngaysinhme = '$ngaysinhme', ngheme = '$ngheme', sdtme = '$sdtme', matkhau = '$pass', cmccbo = '$cmccbo', cmccme = '$cmccme', tenngh = '$tenngh', cmccngh = '$cmccngh', ngaysinhngh = '$ngaysinhngh', nghengh = '$nghengh', sdtngh = '$sdtngh', truongcu = '$truong' where MSTS = '$mats'";
	    					
			$query1 = mysqli_query($conn, $sql23);
			
			$sql234 = "UPDATE `MSHS` SET tenhs = '$ten', gioitinhhs = '$gioitinh', ngaysinhhs = '$ngaysinh', truongcu = '$truong' where MSHS12 = '$MSHS'";
	    					
			$query1234 = mysqli_query($conn, $sql234);
			echo "chúc mừng bạn đã sửa thông tin hồ sơ thành công";
		}
	

	
	?>

	
	

</table>
</form>
</body>
</html>