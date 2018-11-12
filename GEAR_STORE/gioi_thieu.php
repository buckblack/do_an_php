<?php
session_start();
include_once("controllers/c_gioi_thieu.php");
$c_gioi_thieu=new C_gioi_thieu();
$c_gioi_thieu->Hien_thi_gioi_thieu();



?>