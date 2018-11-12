<?php
session_start();
include_once("controllers/c_linh_kien_pc.php");
$c_linh_kien_pc=new C_linh_kien_pc();
if(isset($_GET["ma_loai"]))
{
    $ma_loai=$_GET["ma_loai"];
    switch($ma_loai)
    {
        case 212:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_CPU();
            break;
        }
        case 213:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_Mainboard();
            break;
        }
        case 214:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_VGA();
            break;
        }
        case 215:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_Case();
            break;
        }
        case 216:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_PSU();
            break;
        }
        case 217:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_RAM();
            break;
        }
        case 218:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_SSD();
            break;
        }
        case 219:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_HDD();
            break;
        }
        case 220:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_Cooling();
            break;
        }
        case 221:
        {
            $c_linh_kien_pc->Hien_thi_linh_kien_PM_ban_quyen();
            break;
        }
    }
}
else
{
    $c_linh_kien_pc->Hien_thi_linh_kien();
}

?>