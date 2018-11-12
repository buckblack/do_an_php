<?php
include_once("database.php");
class M_trang_chu extends database
{
	function Doc_danh_sach_logo()
	{
		$sql="select * from hang_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_tat_ca_san_pham()
	{
		$sql="select * from san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_san_pham_moi()
	{
		$sql="select s.*,thu_muc from san_pham s, loai_san_pham l where l.ma_loai=s.ma_loai ORDER by ma_san_pham desc LIMIT 4";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function Doc_goc_may()
	{
		$sql="select * from goc_may order by id desc limit 4";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_slider_trang_chu()
	{
		$sql="select * from slider_trang_chu order by id desc limit 3";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_san_pham_ban_chay()
	{
		$sql="SELECT s.ma_san_pham,ten_san_pham,don_gia,s.hinh,mo_ta_chi_tiet,thu_muc from san_pham s,loai_san_pham l, (SELECT ma_san_pham,COUNT(*) as so_luong FROM hoa_don h,ct_hoa_don c WHERE c.so_hoa_don=h.so_hoa_don
GROUP BY ma_san_pham ORDER BY so_luong DESC LIMIT 6) sp
where s.ma_san_pham=sp.ma_san_pham AND s.ma_loai=l.ma_loai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
function Doc_san_pham_ban_chay_trong_tuan()
	{
		$sql="SELECT s.ma_san_pham,ten_san_pham,don_gia,s.hinh,mo_ta_chi_tiet,thu_muc from san_pham s,loai_san_pham l, (SELECT ma_san_pham,COUNT(*) as so_luong FROM hoa_don h,ct_hoa_don c WHERE c.so_hoa_don=h.so_hoa_don and ngay_hd>=CURRENT_DATE()-7
GROUP BY ma_san_pham ORDER BY so_luong DESC LIMIT 6) sp
where s.ma_san_pham=sp.ma_san_pham AND s.ma_loai=l.ma_loai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
}
?>