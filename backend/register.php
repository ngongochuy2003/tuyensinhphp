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
<html>
	<head>
		<title>ĐĂNG KÝ TUYỂN SINH</title>
	</head>
	<body>
		
		<?php 
		if (isset($_POST["btn_submit"])) {
			require_once("lib/connection.php");

   
    //lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
			  $tennganh = $_POST["tennganh"];
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
			  if ($username == "" || $password == "" || $name == "" || $email == "" || $noisinh == "" || $dantoc == "" || $hokhau == "" || $noio == "" || $tenbo == "" || $ngaysinhbo == "" ||  $sdtbo == "" || $tenme == "" || $ngaysinhme == "" ||  $sdtme== "") {
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
	    					'Đăng kí trực tiếp'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
}


	?>
	<form action="register.php" method="post">
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
				require_once("lib/connection.php");
			
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
	<form action="register.php" method="post">
		<div colspan="2">ĐĂNG KÝ TUYỂN SINH TRƯỜNG ĐẠI HỌC CÔNG NGHỆ ĐÔNG Á </div>
			
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
		<button><a href="hienthi.php">XEM DANH SÁCH CÁC HỒ SƠ</a></button>
		<button><a href="Home.php">TRỞ VỀ TRANG CHỦ</a></button>
 
	</form>
	</body>
	</html>