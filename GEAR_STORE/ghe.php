<?php
session_start();
include_once("controllers/c_ghe.php");
$c_ghe=new C_ghe();
if(isset($_GET["ma_loai"]))
{
	$ma_loai=$_GET["ma_loai"];
	switch($ma_loai)
	{
		case 250:
		{
			$c_ghe->Hien_thi_ghe_dxracer();
			break;
		}
		case 251:
		{
			$c_ghe->Hien_thi_ghe_akracing();
			break;
		}
	}
}
else
{
	$c_ghe->Hien_thi_tat_ca_ghe();
}
?>