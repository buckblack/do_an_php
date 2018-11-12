<?php
session_start();
if(isset($_SESSION['gio_hang']))
{
	echo count($_SESSION['gio_hang']);
}
?>