<?php
session_start();
$key=$_POST['ma_san_pham'];
$don_gia=$_POST['don_gia'];

if(!isset($_SESSION['tong_tien']))
{
	$_SESSION['tong_tien']=0;
}
if(isset($_POST['so_luong_cong']))
{
	$_SESSION['tong_tien']-=$_SESSION['gio_hang'][$key]*$don_gia;
	$sl=$_POST['so_luong_cong']+1;
	$_SESSION['gio_hang'][$key]=$sl;
	$_SESSION['tong_tien']+=$_SESSION['gio_hang'][$key]*$don_gia;
}
else if(isset($_POST['so_luong_tru']))
{
	if($_POST['so_luong_tru']>1)
	{
		$_SESSION['tong_tien']-=$_SESSION['gio_hang'][$key]*$don_gia;
		$sl=$_POST['so_luong_tru']-1;
		$_SESSION['gio_hang'][$key]=$sl;
		$_SESSION['tong_tien']+=$_SESSION['gio_hang'][$key]*$don_gia;
	}
}
else
{
	if(!isset($_SESSION['gio_hang'][$key]))
	{
		$_SESSION['gio_hang'][$key]=1;
		$_SESSION['tong_tien']+=$_SESSION['gio_hang'][$key]*$don_gia;
	}
}
//echo count($_SESSION['gio_hang']);
echo number_format($_SESSION['tong_tien']);
?>