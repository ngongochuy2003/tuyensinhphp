<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {
    header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Thêm Admin</title>
</head>
<body>
<?php
if (isset($_POST["btn_submit"])) {
require_once("../includes/config.php");
//lấy thông tin từ các form bằng phương thức POST
$username = $_POST["username"];
$pass = $_POST["pass"];
$level = $_POST["level"];
 if ($username == "" || $pass == "" || $level == "" ) {
?>
<script type="text/javascript">
alert("Vui lòng nhập đầy đủ thông tin");
window.location="themadmints.php";
</script>
<?php
}else{
$sql="select * from admints where tendangnhap='$username'";
$kt=mysqli_query($conn, $sql);
if(mysqli_num_rows($kt)  > 0){
?>
<script type="text/javascript">
alert("Tên đăng nhập đã tồn tại");
window.location="themadmints.php";
</script>
<?php
}else{
$sql1="INSERT INTO admints (tendangnhap, matkhau, level) VALUES ('$username', '$pass', '$level');";
$kt1=mysqli_query($conn, $sql1);
?>
<script type="text/javascript">
alert("THÊM TÀI KHOẢN THÀNH CÔNG");
window.location="themadmints.php";
</script>
<?php
}
}
}

?>
   
<center><img src="../assets/img/Ban.jpg"></center>
<center><body bgcolor="#CAFFFF">
<h1>THÊM ADMIN - TRANG TUYỂN SINH</h1>
<a href="index2.php"><button>Trở Về</button></a>
<form action="themadmints.php" method="post">
    <table>
        <tr>
            <td>Tên Đăng Nhập </td>
            <td><input type="text" id="username" name="username"></td>
        </tr>
        <tr>
            <td>Mật Khẩu </td>
            <td><input type="password" id="pass" name="pass"></td>
        </tr>
        <tr>
            <td>Level </td>
            <td><select id="level" name="level">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm Admin"></td>
        </tr>
    </table>

</form>
<div style="color: red;">LEVEL 1: TẤT CẢ MỌI CHỨC NĂNG</div>
<div style="color: red;">LEVEL 2: THÊM, XEM, TRA CỨU HỒ SƠ</div>
<div style="color: red;">LEVEL 3: THÊM, XEM, TRA CỨU, SỬA, XÓA MÃ SỐ HỒ SƠ</div>
<div style="color: red;">LEVEL 4: IN PHIẾU ĐĂNG KÍ NHẬP HỌC, IN PHIẾU MẬT KHẨU</div>

</body>
</html>