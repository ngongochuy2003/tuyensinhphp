<?php
define('ROOT', dirname(__FILE__) );
include "../fontend/model/function.php";
session_start();
if($_SESSION['level']!=1) {
    header("location:/myapp/btnhom/fontend/view/index.html");
}
?>
<div class="banner">
    <center><img src="/myapp/btnhom/fontend/view/images/nhom.jpg"  width = 800px  height = 300px ></center>
    <body bgcolor="#CAFFFF">
      
    <style type="text/css">
        #menu ul{
            margin-left: -5px;

        }

        #menu ul li{
            color: #f1f1f1;
            display: inline-block;
            width: 144px;
            height: 40px;
            line-height: 40px;
            margin-left: -5px;
            text-align:center;
            font-weight:bold;

        }

        #menu ul a{
            text-decoration:none;
            width:149px;
            float:left;
            background:#336699;
            color:#FFFFFF;
            text-align:center;
            line-height:30px;
            font-weight:bold;
            border-left:1px solid #FFFFFF;
        }

        #menu ul a:hover{
            background:#000000;
        }
    </style>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="menu" >
    <p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">CHÀO MỪNG BẠN ĐẾN TRANG QUẢN TRỊ HỆ THỐNG TUYỂN SINH</p>
    <p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">TRƯỜNG ĐẠI HỌC CÔNG NGHỆ ĐÔNG Á</p>
   <center> <p>XIN CHÀO <?php echo ($_SESSION['tendangnhap'])?> - LEVEL CỦA BẠN: LEVEL <?php echo ($_SESSION['level'])?></p></center>
    	<ul>
            <li><a href="register.php">THÊM HỒ SƠ</a></li>
            <li><a href="hienthi.php">DANH SÁCH</a></li>
            <li><a href="timkiem.php">TRA CỨU</a></li>
            <li><a href="sua.php">SỬA HỒ SƠ</a></li>
        	<li><a href="xoa.php">XÓA HỒ SƠ</a></li>
        	<li><a href="in.php">IN PHIẾU</a></li>
        	<li><a href="inmatkhau.php">IN MẬT KHẨU</a></li>
        	<li><a href="hienthimshs.php">QUẢN LÝ MSHS</a></li>
        	<li><a href="thongke.php">THỐNG KÊ</a></li>
        	<li><a href="themadmints.php">THÊM TÀI KHOẢN</a></li>
        	<li><a href="danhsachtaikhoan.php">DS ADMIN</a></li>
        	<li><a href="doimatkhautuyensinh.php">ĐỔI MK ADMIN</a></li>
            <li><a href="logout.php">ĐĂNG XUẤT</a></li>
            <li><a href="logout.php">ĐĂNG XUẤT</a></li>
        </ul>
</div>
    

<table  border=0 cellpadding5 cellspacing=0 align="center" width="1300">
    <TR>
        <TD>	<tr>
        <td  colspan="2" bgcolor="#336699" align="center" style="color:white; height: 30px" >
            Copyright &copy; 2023 TRƯỜNG ĐẠI HỌC CÔNG NGHỆ ĐÔNG Á <br>
        </td>
    </tr>
    </td>
    </TR>
</table>