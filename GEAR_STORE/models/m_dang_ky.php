<?php
include_once("database.php");
class M_dang_ky extends database
{
    function kiem_tra_ten_dang_nhap($ten_dang_nhap)
	{
		$sql="select * from khach_hang where ten_dang_nhap=?";
		$this->setQuery($sql);
		$param=array($ten_dang_nhap);
		return count($this->loadAllRows($param));
	}
	
	function them_khach_hang($ten_khach_hang,$dia_chi,$dien_thoai,$ten_dang_nhap,$email,$mat_khau)
	{
		$sql="insert into khach_hang(ten_khach_hang,dia_chi,dien_thoai,ten_dang_nhap,email,mat_khau) values(?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($ten_khach_hang,$dia_chi,$dien_thoai,$ten_dang_nhap,$email,md5($mat_khau));
		return $this->execute($param);
	}
}
?>