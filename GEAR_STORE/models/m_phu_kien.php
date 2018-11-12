<?php
include_once("database.php");
class M_phu_kien extends database
{
	function Doc_tat_ca_phu_kien($vt=-1,$limit=-1)
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and  s.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=208)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_phu_kien_loa()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=252";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_phu_kien_webcam()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=253";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_phu_kien_lot_chuot()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=254";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	


	

	
	
}
?>