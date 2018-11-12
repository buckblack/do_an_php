<?php
require_once ('../models/database.php');
class M_hoa_don extends database
{
    // Quản trị

	public function Doc_hoa_don_da_thanh_toan($vt=-1,$limit=-1)
    {
        $sql = "SELECT so_hoa_don,ngay_hd,k.ma_khach_hang,tri_gia,ten_khach_hang FROM hoa_don h,khach_hang k where k.ma_khach_hang=h.ma_khach_hang and tinh_trang='DA THANH TOAN' order by so_hoa_don desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function Doc_hoa_don_chua_thanh_toan($vt=-1,$limit=-1)
    {
        $sql = "SELECT so_hoa_don,ngay_hd,k.ma_khach_hang,tri_gia,ten_khach_hang FROM hoa_don h,khach_hang k where k.ma_khach_hang=h.ma_khach_hang and tinh_trang='CHUA THANH TOAN' order by so_hoa_don desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function thanh_toan($ma_hoa_don)
    {
        $sql = "update hoa_don set tinh_trang='DA THANH TOAN' where so_hoa_don=?";
        $this->setQuery($sql);
		$param=array($ma_hoa_don);
        return $this->execute($param);
    }
	public function tim_hoa_don($ma_hoa_don,$ten_khach_hang)
    {
        $sql = "SELECT so_hoa_don,ngay_hd,k.ma_khach_hang,tri_gia,ten_khach_hang,tinh_trang FROM hoa_don h,khach_hang k where k.ma_khach_hang=h.ma_khach_hang and (so_hoa_don=? or ten_khach_hang like '%$ten_khach_hang%')";
        $this->setQuery($sql);
		$param=array($ma_hoa_don);
        return $this->loadAllRows($param);
    }
	
	public function Doc_chi_tiet_hoa_don($ma_hoa_don)
    {
        $sql = "select c.ma_san_pham,ten_san_pham,so_luong,c.don_gia from ct_hoa_don c,san_pham s where s.ma_san_pham=c.ma_san_pham and c.so_hoa_don=?";
        $this->setQuery($sql);
		$param=array($ma_hoa_don);
        return $this->loadAllRows($param);
    }
	
	
	
	

}

?>
