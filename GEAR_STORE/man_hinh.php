<?php
session_start();
include_once("controllers/c_man_hinh.php");
$c_man_hinh=new C_man_hinh();
if(isset($_GET["ma_loai"]))
{
	$ma_loai=$_GET["ma_loai"];
	switch($ma_loai)
	{
		case 222:
		{
			$c_man_hinh->Hien_thi_man_hinh_lg();
			break;
		}
		case 223:
		{
			$c_man_hinh->Hien_thi_man_hinh_samsung();
			break;
		}
		case 224:
		{
			$c_man_hinh->Hien_thi_man_hinh_benq();
			break;
		}
		case 225:
		{
			$c_man_hinh->Hien_thi_man_hinh_asus();
			break;
		}
		case 226:
		{
			$c_man_hinh->Hien_thi_man_hinh_acer();
			break;
		}
		case 227:
		{
			$c_man_hinh->Hien_thi_man_hinh_dell();
			break;
		}
		case 228:
		{
			$c_man_hinh->Hien_thi_man_hinh_msi();
			break;
		}
		case 229:
		{
			$c_man_hinh->Hien_thi_man_hinh_viewsonic();
			break;
		}
		
	}
}
else
{
	$c_man_hinh->Hien_thi_tat_ca_man_hinh();
}
?>