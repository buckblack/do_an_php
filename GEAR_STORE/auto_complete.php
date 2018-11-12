<?php
include_once('models/m_trang_chu.php');
$auto_complete=new M_trang_chu();
$ds_auto=$auto_complete->Doc_tat_ca_san_pham();
$str="'";
foreach($ds_auto as $ds)
{
	$str.=trim($ds->ten_san_pham). "','";	
}
$str=substr($str,0,strlen($str)-2);
$smarty->assign("str",$str);
?>