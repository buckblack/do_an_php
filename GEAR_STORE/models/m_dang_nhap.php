<?php
include_once("database.php");
class M_dang_nhap extends database
{
    function kiem_tra_dang_nhap($ten_dang_nhap,$mat_khau)
	{
		$sql="select * from khach_hang where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		$param=array($ten_dang_nhap,md5($mat_khau));
		return $this->loadRow($param);
	}
}
?>