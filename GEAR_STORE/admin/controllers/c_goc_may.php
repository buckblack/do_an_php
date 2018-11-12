<?php
@session_start();
include_once("Smarty_quan_tri.php");
include_once("models/m_goc_may.php");
class C_goc_may
{
	function Hien_thi_them_goc_may()
	{
			// Models
			if(isset($_POST["btn_them"]))
			{
				$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:""; 
				$m_goc_may=new M_goc_may();
				$kq=$m_goc_may->Them_goc_may($hinh);
				if($kq && ($hinh!=""))
				{
					move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/goc_may/$hinh");
					echo "<script>alert('Thêm thành công');location='them_goc_may.php'</script>";
				}
				else
				{
					echo "<script>alert('Thêm thất bại');location='them_goc_may.php'</script>";
				}
				
			}

			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Góc máy");
			$smarty->assign("view","views/goc_may/v_goc_may.tpl");
			$smarty->display("layout.tpl");	
	
	}

}
?>