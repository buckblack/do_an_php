<?php
session_start();
if(!isset($_SESSION['user_fullname']))
{
	header("Location:login.php");	
}
include("controllers/c_user.php");
$c_user=new C_user();
$c_user->Hien_thi_doi_mat_khau();
?>