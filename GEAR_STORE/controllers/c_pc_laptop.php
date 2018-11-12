<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_pc_laptop
{
	function Hien_thi_pc_laptop()
	{
		include_once("models/m_pc_laptop.php");
		$m_pc_laptop=new M_pc_laptop();
		$danh_sach_san_pham=$m_pc_laptop->Doc_tat_ca_san_pc_laptop();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_pc_laptop->Doc_tat_ca_san_pc_laptop($vt,$limit);
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="PC & Laptop";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_may_bo()
	{
		include_once("models/m_pc_laptop.php");
		$m_pc_laptop=new M_pc_laptop();
		$danh_sach_san_pham=$m_pc_laptop->Doc_tat_ca_may_bo();
		
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="PC & Laptop";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_laptop_gaming()
	{
		include_once("models/m_pc_laptop.php");
		$m_pc_laptop=new M_pc_laptop();
		$danh_sach_san_pham=$m_pc_laptop->Doc_tat_ca_laptop_gaming();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="PC & Laptop / Laptop gaming";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_laptop_doanh_nhan()
	{
		include_once("models/m_pc_laptop.php");
		$m_pc_laptop=new M_pc_laptop();
		$danh_sach_san_pham=$m_pc_laptop->Doc_tat_ca_laptop_doanh_nhan();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="PC & Laptop / Laptop doanh nhân";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | PC & Laptop";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	
}

?>