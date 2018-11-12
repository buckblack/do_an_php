<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_chuot
{
	function Hien_thi_tat_ca_chuot()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_tat_ca_chuot();
		
		$p=new pager();
		$limit=8;
		$count=count($danh_sach_san_pham);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_san_pham=$m_chuot->Doc_tat_ca_chuot($vt,$limit);
		
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_razer()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_razer();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / RAZER";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_msi()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_msi();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / MSI";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_steelseries()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_steelseries();		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / STEELSERIES";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_logitech()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_logitech();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / LOGITECH";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_corsair()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_corsair();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / CORSAIR";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_asus()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_asus();
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / ASUS";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_chuot_hyperx()
	{
		include_once("models/m_chuot.php");
		$m_chuot=new M_chuot();
		$danh_sach_san_pham=$m_chuot->Doc_chuot_hyperx();		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Chuột / HYPERX";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Chuột";
		$smarty->assign("title",$title);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}


	
	

	
}

?>