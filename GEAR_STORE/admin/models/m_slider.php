<?php
require_once ('../models/database.php');
class M_slider extends database
{
    // Quản trị

	public function Them_slider($hinh)
    {
        $sql = "insert into slider_trang_chu(hinh) values(?)";
        $this->setQuery($sql);
		$param=array($hinh);
        return $this->execute($param);
    }
}
?>
