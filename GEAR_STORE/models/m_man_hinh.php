<?php
include_once("database.php");
class M_man_hinh extends database
{
	function Doc_tat_ca_man_hinh($vt=-1,$limit=-1)
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and  s.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=203)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_lg()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=222";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_samsung()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=223";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_benq()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=224";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_asus()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=225";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_acer()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=226";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_dell()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=227";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_msi()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=228";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_man_hinh_viewsonic()
	{
		$sql="select s.*,thu_muc from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai=229";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	

	
	
}
?>