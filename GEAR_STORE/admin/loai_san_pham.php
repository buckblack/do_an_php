<?php
session_start();
if(!isset($_SESSION['user_fullname']))
{
	header("Location:login.php");	
}
include("controllers/c_san_pham.php");
$c_san_pham=new C_san_pham();
$c_san_pham->Hien_thi_loai_san_pham();
?>