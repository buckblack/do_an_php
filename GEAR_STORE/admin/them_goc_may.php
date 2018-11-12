<?php
session_start();
if(!isset($_SESSION['user_fullname']))
{
	header("Location:login.php");	
}
include("controllers/c_goc_may.php");
$c_goc_may=new C_goc_may();
$c_goc_may->Hien_thi_them_goc_may();
?>