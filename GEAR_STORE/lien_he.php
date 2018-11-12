<?php
session_start();
include_once("controllers/c_lien_he.php");
$c_lien_he=new C_lien_he();
$c_lien_he->Gui_mail_lien_he();
?>