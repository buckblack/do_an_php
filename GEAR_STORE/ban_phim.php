<?php
session_start();
include_once("controllers/c_ban_phim.php");
$c_ban_phim=new C_ban_phim();
if(isset($_GET["ma_loai"]))
{
    $ma_loai=$_GET["ma_loai"];
    switch($ma_loai)
    {
        case 230:
        {
            $c_ban_phim->Hien_thi_ban_phim_RAZER();
            break;
        }
        case 231:
        {
            $c_ban_phim->Hien_thi_ban_phim_LEOPOLD();
            break;
        }
        case 232:
        {
            $c_ban_phim->Hien_thi_ban_phim_DUCKY();
            break;
        }
        case 233:
        {
            $c_ban_phim->Hien_thi_ban_phim_IKBC();
            break;
        }
        case 234:
        {
            $c_ban_phim->Hien_thi_ban_phim_CORSAIR();
            break;
        }
        case 235:
        {
            $c_ban_phim->Hien_thi_ban_phim_LOGITECH();
            break;
        }
        case 236:
        {
            $c_ban_phim->Hien_thi_ban_phim_IROCKS();
            break;
        }
        case 237:
        {
            $c_ban_phim->Hien_thi_ban_phim_STEELSERIES();
            break;
        }
    }
}
else
{
    $c_ban_phim->Hien_thi_ban_phim();
}
?>