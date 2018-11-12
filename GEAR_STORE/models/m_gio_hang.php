<?php
include_once("database.php");
class M_gio_hang extends database
{
    public function Doc_san_pham_theo_ma($ma_san_pham)
    {
        $sql="select * from san_pham where ma_san_pham=?";
		$this->setQuery($sql);
		$param=array($ma_san_pham);
		return $this->loadRow($param);
    }
	public function Lay_danh_sach_gio_hang($chuoi)
    {
        $sql="select s.*,thu_muc from san_pham s, loai_san_pham l where s.ma_loai=l.ma_loai and ma_san_pham in ($chuoi)";
		$this->setQuery($sql);
		return $this->loadAllRows();
    }
	
	public function Them_khach_hang($ten_khach_hang, $dia_chi, $dien_thoai,$email)
	{
			
            $query = "INSERT INTO khach_hang(ten_khach_hang,dia_chi,dien_thoai,email) VALUES(?,?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($ten_khach_hang,$dia_chi,$dien_thoai,$email));
            if($result)
                return $this->getLastId();
            else
            
                return false;
	}
	
	function Them_hoa_don($ngay_hd,$ma_khach_hang, $tri_gia)
	{
            $query = "INSERT INTO hoa_don(ngay_hd,ma_khach_hang,tri_gia) VALUES(?,?,?)";
            $this->setQuery($query);
            $result = $this->execute(array($ngay_hd,$ma_khach_hang, $tri_gia));
            if($result) 
                return $this->getLastId();
            else
                return false;
	}
	
	function Them_CTHD($ma_hoa_don, $ma_san_pham, $so_luong, $don_gia) 
	{
            $query = "INSERT INTO ct_hoa_don(so_hoa_don, ma_san_pham, so_luong, don_gia) VALUES(?,?,?,?)";
            $this->setQuery($query);
            return $this->execute(array($ma_hoa_don, $ma_san_pham, $so_luong, $don_gia));
	}
	function Lay_don_gia($k) 
	{
            $query = "select don_gia from san_pham where ma_san_pham=?";
            $this->setQuery($query);
            return $this->loadRecord(array($k));
	}

}
?>