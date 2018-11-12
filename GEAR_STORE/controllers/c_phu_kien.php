<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_phu_kien
{
	function Hien_thi_tat_ca_phu_kien()
	{
		include_once("models/m_phu_kien.php");
		$m_phu_kien=new M_phu_kien();
		$danh_sach_san_pham=$m_phu_kien->Doc_tat_ca_phu_kien();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_phu_kien->Doc_tat_ca_phu_kien($vt,$limit);
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Phụ kiện";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Phụ kiện";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_phu_kien_loa()
	{
		include_once("models/m_phu_kien.php");
		$m_phu_kien=new M_phu_kien();
		$danh_sach_san_pham=$m_phu_kien->Doc_phu_kien_loa();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Phụ kiện / Loa";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Phụ kiện";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_phu_kien_webcam()
	{
		include_once("models/m_phu_kien.php");
		$m_phu_kien=new M_phu_kien();
		$danh_sach_san_pham=$m_phu_kien->Doc_phu_kien_webcam();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Phụ kiện / Webcam";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Phụ kiện";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_phu_kien_lot_chuot()
	{
		include_once("models/m_phu_kien.php");
		$m_phu_kien=new M_phu_kien();
		$danh_sach_san_pham=$m_phu_kien->Doc_phu_kien_lot_chuot();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Phụ kiện / Lót chuột";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Phụ kiện";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}

	
	

	
}

?>