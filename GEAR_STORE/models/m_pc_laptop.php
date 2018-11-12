<?php
include_once("database.php");
class M_pc_laptop extends database
{
	function Doc_tat_ca_san_pc_laptop($vt=-1,$limit=-1)
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and  s.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=201)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_tat_ca_may_bo()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=209";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_tat_ca_laptop_gaming()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=210";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_tat_ca_laptop_doanh_nhan()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=211";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	
}
?>