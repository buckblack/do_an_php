<?php
require_once ('../models/database.php');
class M_goc_may extends database
{
    // Quản trị

	public function Them_goc_may($hinh)
    {
        $sql = "insert into goc_may(hinh) values(?)";
        $this->setQuery($sql);
		$param=array($hinh);
        return $this->execute($param);
    }
}
?>
