<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_ghe
{
	function Hien_thi_tat_ca_ghe()
	{
		include_once("models/m_ghe.php");
		$m_ghe=new M_ghe();
		$danh_sach_san_pham=$m_ghe->Doc_tat_ca_ghe();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_ghe->Doc_tat_ca_ghe($vt,$limit);
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Ghế";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Ghế";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_ghe_dxracer()
	{
		include_once("models/m_ghe.php");
		$m_ghe=new M_ghe();
		$danh_sach_san_pham=$m_ghe->Doc_ghe_dxracer();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Ghế / DXRACER";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Ghế";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_ghe_akracing()
	{
		include_once("models/m_ghe.php");
		$m_ghe=new M_ghe();
		$danh_sach_san_pham=$m_ghe->Doc_ghe_akracing();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Ghế / AKRACING";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Ghế";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	
	
}

?>