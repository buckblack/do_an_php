<?php
session_start();
if(!isset($_SESSION['user_fullname']))
{
	header("Location:login.php");	
}
include("controllers/c_slider.php");
$c_slider=new C_slider();
$c_slider->Hien_thi_them_slider();
?>