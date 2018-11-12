<?php
include_once("database.php");
class M_linh_kien_pc extends database
{
    public function Doc_tat_ca_linh_kien_pc($vt=-1,$limit=-1)
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and s.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=202)";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_CPU()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='212'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_Mainboard()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='213'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_VGA()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='214'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_Case()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='215'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_PSU()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='216'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_RAM()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='217'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_SSD()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='218'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_HDD()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='219'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_Cooling()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='220'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_PM_ban_quyen()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai='221'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>