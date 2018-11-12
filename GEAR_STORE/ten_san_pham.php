<?php
include_once('models/thu_vien.php');
$tv=new thu_vien();
$ma_san_pham=$_GET['ma_san_pham'];
$ten_san_pham=$_GET['ten_san_pham'];
$ten_san_pham=$tv->bo_dau($ten_san_pham);
header("location:san-pham=$ma_san_pham-$ten_san_pham");
?>
