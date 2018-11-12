<?php
class C_error
{
	function Hien_thi_404()
	{
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$error='404: Không tìm thấy trang bạn yêu cầu';
		$view="views/v_error.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Lỗi";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Lỗi";
		$smarty->assign("title",$title);
		$smarty->assign("error",$error);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_403()
	{
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$error='403: Bạn không có quyền truy cập vào trang này';
		$view="views/v_error.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Lỗi";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Lỗi";
		$smarty->assign("title",$title);
		$smarty->assign("error",$error);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
	
	
		
}

?>