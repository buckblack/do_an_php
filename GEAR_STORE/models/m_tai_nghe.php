<?php
include_once("database.php");
class M_tai_nghe extends database
{
    public function Doc_tat_ca_tai_nghe($vt=-1,$limit=-1)
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=206)";
        if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_tai_nghe_RAZER()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=245";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_tai_nghe_HYPERX()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=246";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_tai_nghe_STEELSERIES()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=247";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_tai_nghe_CORSAIR()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=248";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_tai_nghe_LOGITECH()
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=249";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>