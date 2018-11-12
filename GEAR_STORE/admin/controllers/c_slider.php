<?php
@session_start();
include_once("Smarty_quan_tri.php");
include_once("models/m_slider.php");
class C_slider
{
	function Hien_thi_them_slider()
	{
			// Models
			if(isset($_POST["btn_them"]))
			{
				$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:""; 
				$m_slider=new M_slider();
				$kq=$m_slider->Them_slider($hinh);
				if($kq && ($hinh!=""))
				{
					move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/slider_trang_chu/$hinh");
					echo "<script>alert('Thêm thành công');location='them_slider.php'</script>";
				}
				else
				{
					echo "<script>alert('Thêm thất bại');location='them_slider.php'</script>";
				}
				
			}

			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Slider trang chủ");
			$smarty->assign("view","views/slider/v_slider.tpl");
			$smarty->display("layout.tpl");	
	
	}

}
?>