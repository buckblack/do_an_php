<?php

class C_dang_nhap
{
    public function Hien_thi_dang_nhap()
    {
        //Models
        include_once("models/m_dang_nhap.php");
        $m_dang_nhap=new M_dang_nhap();
        if(isset($_POST['btn_dang_nhap']))
		{
			$ten_dang_nhap=$_POST['ten_dang_nhap'];
			$mat_khau=$_POST['mat_khau'];
			$tai_khoan=$m_dang_nhap->kiem_tra_dang_nhap($ten_dang_nhap,$mat_khau);
			if(!empty($tai_khoan))
			{
				$_SESSION['khach_hang_ho_ten']=$tai_khoan->ten_khach_hang;
				$_SESSION['khach_hang_id']=$tai_khoan->ma_khach_hang;
				$_SESSION['khach_hang_email']=$tai_khoan->email;
				$_SESSION['khach_hang_dia_chi']=$tai_khoan->dia_chi;
				$_SESSION['khach_hang_dien_thoai']=$tai_khoan->dien_thoai;
				header("location:gio_hang");
				
			}
			else
			{
				echo "<script>alert('Tên tài khoản hoặc mật khẩu không dúng')</script>";
			}
		}

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_dang_nhap.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Đăng nhập";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Đăng nhập";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

   
}
?>