<?php
session_start();
if(!isset($_SESSION['user_fullname']))
{
	header("Location:login.php");	
}
include("controllers/c_hoa_don.php");
$c_hoa_don=new C_hoa_don();
$c_hoa_don->Hien_thi_hoa_don_chua_thanh_toan();
?>