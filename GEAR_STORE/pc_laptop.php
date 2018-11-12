<?php
session_start();
include_once("controllers/c_pc_laptop.php");
$c_pc_laptop=new C_pc_laptop();
if(isset($_GET["ma_loai"]))
{
	$ma_loai=$_GET["ma_loai"];
	switch($ma_loai)
	{
		case 209:
		{
			$c_pc_laptop->Hien_thi_may_bo();
			break;
		}
		case 210:
		{
			$c_pc_laptop->Hien_thi_laptop_gaming();
			break;
		}
		case 211:
		{
			$c_pc_laptop->Hien_thi_laptop_doanh_nhan();
			break;
		}
	}
}
else
{
	$c_pc_laptop->Hien_thi_pc_laptop();
}
?>