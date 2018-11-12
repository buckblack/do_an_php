<?php
include_once("models/thu_vien.php");
class C_trang_chu
{
	function Hien_thi_trang_chu()
	{
		include_once("models/m_trang_chu.php");
		$m_trang_chu=new M_trang_chu();
		$danh_sach_logo=$m_trang_chu->Doc_danh_sach_logo();
		$danh_sach_san_pham_moi=$m_trang_chu->Doc_san_pham_moi();
		$danh_sach_ban_chay=$m_trang_chu->Doc_san_pham_ban_chay();
		$danh_sach_ban_chay_trong_tuan=$m_trang_chu->Doc_san_pham_ban_chay_trong_tuan();
		$danh_sach_goc_may=$m_trang_chu->Doc_goc_may();
		$danh_sach_slider_trang_chu=$m_trang_chu->Doc_slider_trang_chu();
		
		
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_trang_chu.tpl";
		$smarty->assign("view",$view);
		$title="GEAR STORE";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		$smarty->assign("danh_sach_logo",$danh_sach_logo);
		$smarty->assign("danh_sach_san_pham_moi",$danh_sach_san_pham_moi);
		$smarty->assign("danh_sach_ban_chay",$danh_sach_ban_chay);
		$smarty->assign("danh_sach_goc_may",$danh_sach_goc_may);
		$smarty->assign("danh_sach_slider_trang_chu",$danh_sach_slider_trang_chu);
		$smarty->assign("danh_sach_ban_chay_trong_tuan",$danh_sach_ban_chay_trong_tuan);
		$smarty->display("layout.tpl");
		
	}
}

?>