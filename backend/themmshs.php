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
<html>
	<head>
		<title>ĐĂNG KÝ TUYỂN SINH</title>
	</head>
	<body>
		<?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$username1 = $_POST["username1"];
  			$username2 = $_POST["username2"];
  			$username3 = $_POST["username3"];
  			
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "") {
				   echo "Vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from MSHS where MSHS12='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Mã số hồ sơ đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO `MSHS`(MSHS12, tenhs, gioitinhhs, ngaysinhhs) VALUES ('$username','$username1','$username2','$username3')";
	    				// thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
	?>
	<form action="" method="post">
		<div colspan="2">THÊM MSHS - Đại học công nghệ đông á </div>
			
				<div style="color: red;">NHỮNG THÔNG TIN CÓ TIÊU ĐỀ MÀU ĐỎ LÀ BẮT BUỘC NHẬP</div>
			
			<table>	
			<tr>
				<td style="color: red;">Mã số hồ sơ :</td>
				<td><input type="text" id="username" name="username" style="width: 200px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Họ và tên hs :</td>
				<td><input type="text" id="username1" name="username1" style="width: 200px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Giới tính hs :</td>
				<td><input type="text" id="username2" name="username2" style="width: 200px;"></td>
			</tr>
			<tr>
				<td style="color: red;">Ngày sinh hs :</td>
				<td><input type="text" id="username3" name="username3" style="width: 200px;"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky" style="width: 500px;"></td>
			</tr>
 
		</table>
		<button><a href="hienthimshs.php">XEM DANH SÁCH CÁC MÃ SỐ HỒ SƠ</a></button>
		<button><a href="Home.php">TRỞ VỀ TRANG CHỦ</a></button>
 
	</form>
	</body>
	</html>