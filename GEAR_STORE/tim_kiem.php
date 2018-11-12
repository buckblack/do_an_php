<?php
session_start();
include_once("controllers/c_tim_kiem.php");
$c_tim_kiem=new C_tim_kiem();
$c_tim_kiem->Hien_thi_danh_sach_tim_kiem();
?>