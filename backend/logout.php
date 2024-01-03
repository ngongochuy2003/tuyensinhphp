<?php
session_start();
session_destroy();
header('location: /myapp/btnhom/fontend/view/index.php');
?>