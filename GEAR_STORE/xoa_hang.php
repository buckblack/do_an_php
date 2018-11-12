<?php
session_start();
if(isset($_POST['ma_san_pham']))
{
	$key=$_POST['ma_san_pham'];
	$don_gia=$_POST['don_gia'];
	$_SESSION['tong_tien']-=$_SESSION['gio_hang'][$key]*$don_gia;
	echo $_SESSION['tong_tien'];
	unset($_SESSION['gio_hang'][$key]);
}
else
{
	unset($_SESSION['gio_hang']);
	unset($_SESSION['tong_tien']);
	
	header("location:gio_hang.php");
}

//echo count($_SESSION['gio_hang']);
?>