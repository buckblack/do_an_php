<?php
include_once("c_gui_mail.php");
class C_dang_ky
{
    public function Hien_thi_dang_ky()
    {
        //Models
        include_once("models/m_dang_ky.php");
        $m_dang_ky=new M_dang_ky();
        if(isset($_POST['btn_dang_ky']))
		{
			$ten_khach_hang=$_POST['ten_khach_hang'];
			$dia_chi=$_POST['dia_chi'];
			$dien_thoai=$_POST['dien_thoai'];
			$ten_dang_nhap=$_POST['ten_dang_nhap'];
			$email=$_POST['email'];
			$mat_khau=$_POST['mat_khau'];
			$ktra=$m_dang_ky->kiem_tra_ten_dang_nhap($ten_dang_nhap);
			if($ktra==0)
			{
				$kq=$m_dang_ky->them_khach_hang($ten_khach_hang,$dia_chi,$dien_thoai,$ten_dang_nhap,$email,$mat_khau);
				if($kq)
				{
					$mail=new C_gui_mail();
					$mail->gui_mail_dang_ky($ten_khach_hang,$email,$ten_dang_nhap,$mat_khau);
					echo "<script>alert('Đăng ký thành công');location='dang_nhap'</script>";
				}
				else
				{
					echo "<script>alert('Đã có lỗi xảy ra, vui lòng thử lại');location='dang_ky'</script>";
				}
			}
			else
			{
				echo "<script>alert('Tên tài khoản đã tồn tại')</script>";
			}
		}

        //View
        include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_dang_ky.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Đăng ký";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Đăng ký";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
    }

   
}
?>