<?php
include_once("database.php");
class M_ghe extends database
{
	function Doc_tat_ca_ghe($vt=-1,$limit=-1)
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and  s.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=207)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_ghe_dxracer()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=250";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_ghe_akracing()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=251";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	

	
	
}
?>