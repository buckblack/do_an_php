<?php
session_start();
if(isset($_SESSION['khach_hang_ho_ten']))
{
	header("location:.");
}
else
{
	include_once("controllers/c_dang_ky.php");
	$c_dang_ky=new C_dang_ky();
	$c_dang_ky->Hien_thi_dang_ky();
}
?>