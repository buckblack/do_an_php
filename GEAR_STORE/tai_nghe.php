<?php
session_start();
include_once("controllers/c_tai_nghe.php");
$c_tai_nghe=new C_tai_nghe();
if(isset($_GET["ma_loai"]))
{
    $ma_loai=$_GET["ma_loai"];
    switch($ma_loai)
    {
        case 245:
        {
            $c_tai_nghe->Hien_thi_tai_nghe_RAZER();
            break;
        }
        case 246:
        {
            $c_tai_nghe->Hien_thi_tai_nghe_HYPERX();
            break;
        }
        case 247:
        {
            $c_tai_nghe->Hien_thi_tai_nghe_STEELSERIES();
            break;
        }
        case 248:
        {
            $c_tai_nghe->Hien_thi_tai_nghe_CORSAIR();
            break;
        }
        case 249:
        {
            $c_tai_nghe->Hien_thi_tai_nghe_LOGITECH();
            break;
        }
    }
}
else
{
    $c_tai_nghe->Hien_thi_tai_nghe();
}
?>