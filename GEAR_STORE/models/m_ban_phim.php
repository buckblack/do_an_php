<?php
include_once("database.php");
class M_ban_phim extends database
{
    public function Doc_tat_ca_ban_phim($vt=-1,$limit=-1)
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai in (select ma_loai from loai_san_pham where ma_loai_cha=204)";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Doc_tat_ca_ban_phim_RAZER()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=230";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_LEOPOLD()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=231";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_DUCKY()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=232";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_IKBC()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=233";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_CORSAIR()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=234";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_LOGITECH()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=235";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_IROCKS()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=236";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function Doc_tat_ca_ban_phim_STEELSERIES()
    {
        $sql="select s.*,thu_muc,ten_loai from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and l.ma_loai=237";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>