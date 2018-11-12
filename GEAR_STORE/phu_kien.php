<?php
session_start();
include_once("controllers/c_phu_kien.php");
$c_phu_kien=new C_phu_kien();
if(isset($_GET["ma_loai"]))
{
	$ma_loai=$_GET["ma_loai"];
	switch($ma_loai)
	{
		case 252:
		{
			$c_phu_kien->Hien_thi_phu_kien_loa();
			break;
		}
		
		case 253:
		{
			$c_phu_kien->Hien_thi_phu_kien_webcam();
			break;
		}
		
		case 254:
		{
			$c_phu_kien->Hien_thi_phu_kien_lot_chuot();
			break;
		}

		
	}
}
else
{
	$c_phu_kien->Hien_thi_tat_ca_phu_kien();
}
?>