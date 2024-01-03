<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TRƯỜNG THCS ÁNH DƯƠNG </title>
    
    <link rel="shortcut icon" href="assets/ico/icon.ico" type="image/gif" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="assets/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/ico.ico" >
  </head>
<body bgcolor="#CAFFFF">
<!-- 
	Upper Header Section 
-->

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
	<center><img src="/myapp/btnhom/fontend/view/images/nhom.jpg" alt="huydz" height="144" width = "500"></center>

</header>

<!--
Navigation Bar Section 
-->
	
<div style="font-size: 30px; color: red;">TUYỂN SINH TRỰC TUYẾN</div><br>
<button><a href="indexuser.php">TRỞ VỀ</a></button><br>

<?php 
		if (isset($_POST["btn_submit"])) {
			require_once("connection.php");

   
    //lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
			$tennganh = $_POST["tennganh"];
  			$password = $_POST["pass"];
  			$pass= $_POST["pass1"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			$noisinh = $_POST["noisinh"];
  			$dantoc = $_POST["dantoc"];
  			$hokhau = $_POST["hokhau"];
  			$noio = $_POST["noio"];
  			$tenbo = $_POST["tenbo"];
  			$ngaysinhbo = $_POST["ngaysinhbo"];
  			$nghebo = $_POST["nghebo"];
  			$sdtbo = $_POST["sdtbo"];
  			$tenme = $_POST["tenme"];
  			$ngaysinhme = $_POST["ngaysinhme"];
  			$ngheme = $_POST["ngheme"];
  			$sdtme = $_POST["sdtme"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($noisinh == "" || $dantoc == "" || $hokhau == "" || $noio == "" || $tenbo == "" || $ngaysinhbo == "" ||  $sdtbo == "" || $tenme == "" || $ngaysinhme == "" ||  $sdtme== "") {
				   echo "Vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where MSHS='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Mã số hồ sơ đã tồn tại";
					}else{
						$sql123="select * from MSHS where MSHS12='$username'";
						$k123t=mysqli_query($conn, $sql123);
						if(mysqli_num_rows($k123t)  == 0){
						echo "Mã số hồ sơ không tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					MSHS,
							tennganh,
	    					hovaten,
	    					gioitinh,
						    ngaysinh,
						    noisinh,
						    dantoc,
	    					hokhau,
	    					noio,
	    					tenbo,
	    					ngaysinhbo,
	    					nghebo,
	    					sdtbo,
	    					tenme,
	    					ngaysinhme,
	    					ngheme,
	    					sdtme,
	    					matkhau,
	    					hinhthucdangki
	    					) VALUES (
	    					'$username',
							'$tennganh',
	    					'$password',
						    '$name',
	    					'$email',
	    					'$noisinh',
	    					'$dantoc',
	    					'$hokhau',
	    					'$noio',
	    					'$tenbo',
	    					'$ngaysinhbo',
	    					'$nghebo',
	    					'$sdtbo',
	    					'$tenme',
	    					'$ngaysinhme',
	    					'$ngheme',
	    					'$sdtme',
	    					'$pass',
	    					'Đăng kí trực tuyến'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
}


	?>
	<form action="dangkituyensinh.php" method="post">
			<table>
				<tr>
					<td>NHẬP MSHS ĐỂ TÌM KIẾM</td>
					<td><input type="text" id="username2" name="username2" style="width: 200px;"></td>
					<td colspan="2" align="center"><input type="submit" name="submit" value="TÌM KIẾM" style="width: 500px;"></td>
				</tr>
			</table>
		</form>
		<?php 
			if (isset($_POST["submit"])) {
				require_once("connection.php");
				 function createRandomPassword() {

        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;

        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }

        return $pass;

    }

    // Usage
    $password = createRandomPassword();
				$username2 = $_POST["username2"];
				$sql3 = "SELECT * FROM MSHS WHERE MSHS12 = '$username2'";
				$query3 = mysqli_query($conn, $sql3);
				$num3 = mysqli_num_rows($query3);
				if ($num3 > 0) {
				$row3 = mysqli_fetch_array($query3)
			

	
		 ?>
	<form action="dangkituyensinh.php" method="post">
		<div colspan="2">ĐĂNG KÝ TUYỂN SINH - THCS ÁNH DƯƠNG</div>
			
				<div style="color: red;">NHỮNG THÔNG TIN CÓ TIÊU ĐỀ MÀU ĐỎ LÀ BẮT BUỘC NHẬP</div>
			
			
			<table>	
			<tr>
				<td style="color: red;">Mã số hồ sơ :</td>
				<td><input type="text" id="username" name="username" value="<?php echo $row3['MSHS12'] ?>" readonly style="width: 200px;" readonly></td>
			</tr>
			<tr>
				<td style="color: red;">Tên ngành :</td>
				<td><input type="text" id="tennganh" name="tennganh" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Họ Tên :</td>
				<td><input type="text" id="pass" name="pass" value="<?php echo $row3['tenhs'] ?>" readonly style="width: 790px;" readonly></td>
			</tr>
			<tr>
				<td style="color: red;">Giới tính :</td>
				<td><input type="text" id="name" name="name" value="<?php echo $row3['gioitinhhs'] ?>" readonly style="width: 790px;" readonly></td>
			</tr>
			<tr>
				<td style="color: red;">Ngày Sinh :</td>
				<td><input type="text" id="email" name="email" value="<?php echo $row3['ngaysinhhs'] ?>" readonly style="width: 790px;" readonly></td>
			</tr>
			<tr>
				<td style="color: red;">Nơi Sinh :</td>
				<td><input type="text" id="noisinh" name="noisinh" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Dân Tộc :</td>
				<td><input type="text" id="dantoc" name="dantoc" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Hộ Khẩu Thường Trú :</td>
				<td><input type="text" id="hokhau" name="hokhau" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Nơi Ở Hiện Tai :</td>
				<td><input type="text" id="noio" name="noio" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Tên Bố :</td>
				<td><input type="text" id="tenbo" name="tenbo" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Ngày Sinh (Bố) :</td>
				<td><input type="text" id="ngaysinhbo" name="ngaysinhbo" style="width: 790px;"></td>
			</tr>
			<tr>
				<td>Nghề Nghiệp (Bố) :</td>
				<td><input type="text" id="nghebo" name="nghebo" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">SĐT (Bố) :</td>
				<td><input type="text" id="sdtbo" name="sdtbo" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Tên Mẹ :</td>
				<td><input type="text" id="tenme" name="tenme" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Ngày Sinh (Mẹ) :</td>
				<td><input type="text" id="ngaysinhme" name="ngaysinhme" style="width: 790px;"></td>
			</tr>
			<tr>
				<td>Nghề Nghiệp (Mẹ) :</td>
				<td><input type="text" id="ngheme" name="ngheme" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">SĐT (Mẹ) :</td>
				<td><input type="text" id="sdtme" name="sdtme" style="width: 790px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Mật Khẩu :</td>
				<td><input type="text" id="pass1" name="pass1" style="width: 790px;" value="<?php echo($password)?>" readonly></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky" style="width: 500px;"></td>
			</tr>
			</tr>
 
		</table>
		<?php 
	}else{
		echo "MÃ SỐ HỒ SƠ KHÔNG TỒN TẠI";
	}
}



		 ?>
		
	</form>
	<div style="color: red;">
	<div>CÁCH LẤY MÃ SỐ HỒ SƠ</div>
	<div>CÁCH 1: GỌI ĐIỆN TỚI SỐ:</div>
	<div>0375071399</div>
	<div>0375071398</div>
	<div>0375071397</div>
	<div>CÁCH 2: NHẮN TIN THEO CÚ PHÁP:</div>
	<div>THCSAD_MSHS_TENHS_GIOITINHHS_NGAYSINHHS GỬI 0375071396</div>
	<div>TRONG ĐÓ</div>
	<div>_: KHOẢNG CÁCH</div>
	<div>TENHS: LÀ TÊN HỌC SINH VIẾT CÁCH CÓ DẤU</div>
	<div>GIOITINHHS: LÀ GIỚI TÍNH HỌC SINH (NAM/NŨ) </div>
	<div>NGAYSINHHS: LÀ NGÀY SINH CỦA HỌC SINH (DỊNH ĐẠNG: DD/MM/YYYY) </div>
	</div>
 </body>
 </html>