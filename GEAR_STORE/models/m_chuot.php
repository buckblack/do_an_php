<?php
include_once("database.php");
class M_chuot extends database
{
	function Doc_tat_ca_chuot($vt=-1,$limit=-1)
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and  s.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=205)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_chuot_razer()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=238";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_chuot_steelseries()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=239";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_chuot_logitech()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=240";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	
	function Doc_chuot_corsair()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=241";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_chuot_asus()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=242";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_chuot_hyperx()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=243";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_chuot_msi()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=244";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	

	


	

	
	
}
?>