<?php
include_once("models/Pager.php");
include_once("models/thu_vien.php");
class C_tim_kiem
{
	function Hien_thi_danh_sach_tim_kiem()
	{
		include_once("models/m_tim_kiem.php");
		$m_tim_kiem=new M_tim_kiem();
		$danh_sach_san_pham=array();
		$thanh_phan_trang='';
		if(isset($_POST['btn_tim_kiem']))
		{
			$_SESSION['tim_kiem']=$_POST['q'];
			
		}
		if(isset($_SESSION['tim_kiem']))
		{
			$ten_san_pham=$_SESSION['tim_kiem'];
			$san_pham=$m_tim_kiem->Doc_san_pham_theo_ten($ten_san_pham);
			$p=new pager();
			$limit=8;
			
			$count=count($san_pham);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$thanh_phan_trang=$p->pageList($curpage,$pages);
			$danh_sach_san_pham=$m_tim_kiem->Doc_san_pham_theo_ten($ten_san_pham,$vt,$limit);
		}
		
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Tìm kiếm";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Tìm kiếm";
		$smarty->assign("title",$title);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
}

?>