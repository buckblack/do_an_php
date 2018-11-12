<?php
include_once("database.php");
class M_tim_kiem extends database
{
	function Doc_san_pham_theo_ten($ten_san_pham,$vt=-1,$limit=-1)
	{
		$sql="select s.*,thu_muc from san_pham s, loai_san_pham l where l.ma_loai=s.ma_loai and ten_san_pham like '%$ten_san_pham%'";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	
}
?>