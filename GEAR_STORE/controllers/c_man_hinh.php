<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_man_hinh
{
	function Hien_thi_tat_ca_man_hinh()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_tat_ca_man_hinh();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_man_hinh->Doc_tat_ca_man_hinh($vt,$limit);
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_lg()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_lg();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / LG";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / LG";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_samsung()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_samsung();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / SAMSUNG";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / SAMSUNG";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_benq()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_benq();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / BENQ";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / BENQ";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_asus()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_asus();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / ASUS";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / ASUS";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_acer()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_acer();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / ACER";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / ACER";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_dell()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_dell();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / DELL";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / DELL";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_msi()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_msi();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / MSI";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / MSI";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_man_hinh_viewsonic()
	{
		include_once("models/m_man_hinh.php");
		$m_man_hinh=new M_man_hinh();
		$danh_sach_san_pham=$m_man_hinh->Doc_man_hinh_viewsonic();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Màn hình / VIEWSONIC";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Màn hình / VIEWSONIC";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	

	
}

?>