<?php
include_once("models/Pager.php");
include_once("models/thu_vien.php");
class C_san_pham
{
    public function Hien_thi_san_pham()
    {
        
        //View
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Sản phẩm";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Sản phẩm";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");   
		
	}

   
}

?>