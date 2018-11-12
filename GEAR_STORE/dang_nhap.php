<?php
session_start();
if(isset($_SESSION['khach_hang_ho_ten']))
{
	header("location:.");
}
else
{
	include_once("controllers/c_dang_nhap.php");
	$c_dang_nhap=new C_dang_nhap();
	$c_dang_nhap->Hien_thi_dang_nhap();
}
?>