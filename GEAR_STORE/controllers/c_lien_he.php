<?php
class C_lien_he
{
	function Gui_mail_lien_he()
	{
		if(isset($_POST["submit"]))
		{
			$ho_ten=$_POST["ho_ten"];
			$email=$_POST["email"];
			$dien_thoai=$_POST["dien_thoai"];
			$noi_dung=$_POST["noi_dung"];
			include_once("controllers/c_gui_mail.php");
			$c_gui_mail= new C_gui_mail();
			$c_gui_mail->gui_mail_lien_he($ho_ten,$email,$dien_thoai,$noi_dung);
			echo "<script>alert('Gửi thành công')</script>";
		}
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_lien_he.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Liên hệ";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Liên hệ";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
}

?>