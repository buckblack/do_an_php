<?php
session_start();
unset($_SESSION['khach_hang_ho_ten']);
unset($_SESSION['khach_hang_email']);
unset($_SESSION['khach_hang_dia_chi']);
unset($_SESSION['khach_hang_dien_thoai']);
unset($_SESSION['khach_hang_id']);
header("location:.");
?>