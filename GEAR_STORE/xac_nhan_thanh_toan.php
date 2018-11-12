<?php
session_start();
include_once("controllers/c_gio_hang.php");
$c_gio_hang=new C_gio_hang();
$c_gio_hang->Mua_hang();
?>

