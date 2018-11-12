<?php
class C_gioi_thieu
{
    public function Hien_thi_gioi_thieu()
    {
        
        //View
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_gioi_thieu.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Giới thiệu";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Giới thiệu";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");    
		
	}

   
}

?>