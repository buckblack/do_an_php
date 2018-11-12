<?php
session_start();
if(!isset($_SESSION['user_fullname']))
{
	header("Location:login.php");	
}
include("controllers/c_tin_tuc.php");
$c_tin_tuc=new C_tin_tuc();
$c_tin_tuc->Xoa_tin_tuc();
?>