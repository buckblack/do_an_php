<?php
include("../models/database.php");
class M_user extends database
{
	function Doc_user()
	{
		$sql="select * from nguoi_dung";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_Table()
	{
		$sql="SHOW TABLES FROM ban_hang_vi_tinh";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	function Doc_user_theo_tenDn_pass($ten,$mk)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}	
	
	function Doi_mat_khau($mat_khau_moi,$ten_dang_nhap,$mat_khau_hien_tai)
	{
		$sql="update nguoi_dung set mat_khau=? where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		$param=array(md5($mat_khau_moi),$ten_dang_nhap,md5($mat_khau_hien_tai));
		return $this->execute($param);
	}	
	
	function kiem_tra_mat_khau_hien_tai($ten,$mk)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ten,md5($mk)));	
	}
	
	function kiem_tra_ten_dang_nhap($ten_dang_nhap)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ten_dang_nhap));	
	}
	
	function Them_user($ma_loai,$ho_ten,$ten_dang_nhap,$email,$mat_khau)	
	{
		$sql="insert into nguoi_dung (ma_loai_nguoi_dung,ho_ten,ten_dang_nhap,email,mat_khau) values(?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($ma_loai,$ho_ten,$ten_dang_nhap,$email,md5($mat_khau));
		return $this->execute($param);
	}
	
	function Doc_danh_sach_user($user)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap!=?";
		$this->setQuery($sql);
		$param=array($user);
		return $this->loadAllRows($param);	
	}
	
	function Xoa_user($user)
	{
		$sql="delete from nguoi_dung where ten_dang_nhap=?";
		$this->setQuery($sql);
		$param=array($user);
		return $this->execute($param);	
	}
	
		
}
?>