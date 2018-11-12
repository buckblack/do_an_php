<?php
session_start();
include_once("controllers/c_error.php");
$c_error=new C_error();
$c_error->Hien_thi_404();
?>

