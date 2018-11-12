<?php
include_once("database.php");
class M_chi_tiet_san_pham extends database
{
	function Doc_san_pham_theo_ma($ma_san_pham)
	{
		$sql="select s.* ,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and ma_san_pham=?";
		$this->setQuery($sql);
		$param=array($ma_san_pham);
		return $this->loadRow($param);
	}
	function Doc_san_pham_cung_loai($ma_san_pham,$ma_loai)
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where l.ma_loai=s.ma_loai and ma_san_pham!=? and l.ma_loai=? limit 4";
		$this->setQuery($sql);
		$param=array($ma_san_pham,$ma_loai);
		return $this->loadAllRows($param);
	}
	function Doc_binh_luan_theo_ma_san_pham($ma_san_pham)
	{
		$sql="select * from binh_luan where ma_san_pham=? order by ma_binh_luan desc limit 20";
		$this->setQuery($sql);
		$param=array($ma_san_pham);
		return $this->loadAllRows($param);
	}
	function Them_binh_luan($ma_san_pham,$nguoi_gui,$noi_dung,$email,$dien_thoai)
	{
		$sql="insert into binh_luan(ma_san_pham,nguoi_gui,noi_dung,email,dien_thoai) values(?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array($ma_san_pham,$nguoi_gui,$noi_dung,$email,$dien_thoai);
		return $this->execute($param);
	}
	
}
?>