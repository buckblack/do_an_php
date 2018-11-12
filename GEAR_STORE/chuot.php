<?php
session_start();
include_once("controllers/c_chuot.php");
$c_chuot=new C_chuot();
if(isset($_GET["ma_loai"]))
{
	$ma_loai=$_GET["ma_loai"];
	switch($ma_loai)
	{
		case 238:
		{
			$c_chuot->Hien_thi_chuot_razer();
			break;
		}
		
		case 239:
		{
			$c_chuot->Hien_thi_chuot_steelseries();
			break;
		}
		
		case 240:
		{
			$c_chuot->Hien_thi_chuot_logitech();
			break;
		}
		
		case 241:
		{
			$c_chuot->Hien_thi_chuot_corsair();
			break;
		}
		
		case 242:
		{
			$c_chuot->Hien_thi_chuot_asus();
			break;
		}
		
		case 243:
		{
			$c_chuot->Hien_thi_chuot_hyperx();
			break;
		}
		
		case 244:
		{
			$c_chuot->Hien_thi_chuot_msi();
			break;
		}
		

		
	}
}
else
{
	$c_chuot->Hien_thi_tat_ca_chuot();
}
?>