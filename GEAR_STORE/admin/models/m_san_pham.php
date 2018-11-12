<?php
require_once ('../models/database.php');
class M_san_pham extends database
{
    // Quản trị

	public function Doc_tat_ca_san_pham()
    {
        $sql = "select ma_san_pham,ten_san_pham,ten_loai,mo_ta_chi_tiet,don_gia,s.hinh from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	public function Doc_danh_sach_san_pham($vt=-1,$limit=-1)
	{
		$sql="select ma_san_pham,ten_san_pham,ten_loai,mo_ta_chi_tiet,don_gia,s.hinh from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai ORDER by ma_san_pham DESC";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	} 
	
	public function tim_san_pham($ma_san_pham,$ten_san_pham)
    {
        $sql = "select ma_san_pham,ten_san_pham,ten_loai,mo_ta_chi_tiet,don_gia,s.hinh from san_pham s,loai_san_pham l where s.ma_loai=l.ma_loai and (ma_san_pham like '%$ma_san_pham%' or ten_san_pham like '%$ten_san_pham%')";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function Doc_san_pham_theo_ma($ma_san_pham)
    {
        $sql = "select * from san_pham where ma_san_pham=?";
		$param=array($ma_san_pham);
        $this->setQuery($sql);
        return $this->loadRow($param);
    }
	
	
	public function Them_san_pham($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh)
    {
        $sql = "insert into san_pham(ten_san_pham,ma_loai,mo_ta_chi_tiet,don_gia,hinh) values(?,?,?,?,?)";
		$param=array($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh);
        $this->setQuery($sql);
        return $this->execute($param);
    }
	
	public function Cap_nhat_san_pham($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh,$ma_san_pham)
    {
        $sql = "update san_pham set ten_san_pham=?,ma_loai=?,mo_ta_chi_tiet=?,don_gia=?,hinh=? where ma_san_pham=?";
		$param=array($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh,$ma_san_pham);
        $this->setQuery($sql);
        return $this->execute($param);
    }
	
	public function Lay_thu_muc($ma_loai)
    {
        $sql = "select thu_muc from loai_san_pham where ma_loai=?";
		$param=array($ma_loai);
        $this->setQuery($sql);
        return $this->loadRecord($param);
    }
	public function Xoa_san_pham($ma_san_pham)
    {
        $sql = "delete from san_pham where ma_san_pham=?";
		$param=array($ma_san_pham);
        $this->setQuery($sql);
        return $this->execute($param);
    }
	
	public function Doc_danh_sach_loai_san_pham()
    {
        $sql = "select * from loai_san_pham where ma_loai_cha!=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function Doc_danh_sach_loai_san_pham_cha()
    {
        $sql = "select * from loai_san_pham where ma_loai_cha=0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function Doc_loai_san_pham_theo_ma($ma_loai)
    {
        $sql = "select * from loai_san_pham where ma_loai=?";
        $this->setQuery($sql);
		$param=array($ma_loai);
        return $this->loadRow($param);
    }
	
	public function Them_loai_san_pham($ten_loai,$ma_loai_cha,$thu_muc)
    {
        $sql = "insert into loai_san_pham(ten_loai,ma_loai_cha,thu_muc) values(?,?,?)";
        $this->setQuery($sql);
		$param=array($ten_loai,$ma_loai_cha,$thu_muc);
        return $this->execute($param);
    }
	
	public function Cap_nhat_loai_san_pham($ten_loai,$ma_loai_cha,$thu_muc,$ma_loai)
    {
        $sql = "update loai_san_pham set ten_loai=?,ma_loai_cha=?,thu_muc=? where ma_loai=?";
        $this->setQuery($sql);
		$param=array($ten_loai,$ma_loai_cha,$thu_muc,$ma_loai);
        return $this->execute($param);
    }
	
	
	

}

?>
