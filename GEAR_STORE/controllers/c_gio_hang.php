<?php
include_once("models/thu_vien.php");
class C_gio_hang
{
	function Hien_thi_gio_hang()
	{

		include_once("models/m_gio_hang.php");
		$m_gio_hang= new M_gio_hang();
		$chuoi=array();
		if(isset($_SESSION['gio_hang']))
		{
			foreach($_SESSION['gio_hang'] as $k=>$v)
			{
				$chuoi[]=$k;
				
			}
			$chuoi=implode(',',$chuoi);
		}
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_gio_hang.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Giỏ hàng";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Giỏ hàng";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		if(!empty($chuoi))
		{
			$danh_sach_san_pham=$m_gio_hang->Lay_danh_sach_gio_hang($chuoi);
			$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		}
		$smarty->display("layout.tpl");
		
	}
	
	function Hien_thi_xac_nhan_gio_hang()
	{

		include_once("models/m_gio_hang.php");
		$m_gio_hang= new M_gio_hang();
		$chuoi=array();
		if(isset($_SESSION['gio_hang']))
		{
			foreach($_SESSION['gio_hang'] as $k=>$v)
			{
				$chuoi[]=$k;
				
			}
			$chuoi=implode(',',$chuoi);
		}
		
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_xac_nhan_thanh_toan.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Giỏ hàng";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Xác nhận giỏ hàng";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		if(!empty($chuoi))
		{
			$danh_sach_san_pham=$m_gio_hang->Lay_danh_sach_gio_hang($chuoi);
			$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		}
		$smarty->display("layout.tpl");
		
	}
	
	function Mua_hang()
	{
		include_once("models/m_gio_hang.php");
		$m_gio_hang= new M_gio_hang();
		$chuoi=array();
		if(isset($_SESSION['gio_hang']))
		{
			foreach($_SESSION['gio_hang'] as $k=>$v)
			{
				$chuoi[]=$k;
				
			}
			$chuoi=implode(',',$chuoi);
		}
		
		if(isset($_POST["xac_nhan"]))
		{
			$ten_khach_hang=$_POST["ten_khach_hang"];
			$dia_chi=$_POST["dia_chi"];
			$dien_thoai=$_POST["dien_thoai"];
			$email=$_POST["email"];
			if(!isset($_SESSION['khach_hang_id']))
			{
				$ma_khach_hang=$m_gio_hang->Them_khach_hang($ten_khach_hang, $dia_chi, $dien_thoai,$email);
			}
			else
			{
				$ma_khach_hang=$_SESSION['khach_hang_id'];
			}
			if($ma_khach_hang>0)
            {
				$tri_gia=$_SESSION['tong_tien'];
                $ngay_hd = date('Y-m-d');        
                $ma_hoa_don=$m_gio_hang->Them_hoa_don($ngay_hd,$ma_khach_hang, $tri_gia);
				
                if($ma_hoa_don>0)
                {
					foreach($_SESSION['gio_hang'] as $k=>$v)
					{
						$don_gia=$m_gio_hang->Lay_don_gia($k);
						$m_gio_hang->Them_CTHD($ma_hoa_don, $k, $v, $don_gia);
					}
					include_once("controllers/c_gui_mail.php");
					$c_gui_mail= new C_gui_mail();
					$c_gui_mail->gui_mail_dat_hang($ten_khach_hang,$dia_chi,$dien_thoai,$email);
				}
				echo "<script>alert('Đặt hàng thành công');location='xoa_hang.php'</script>";
				//header("location:xoa_hang.php");
			
			}
		}
		else
		{
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_xac_nhan_thanh_toan.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Giỏ hàng";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Xác nhận giỏ hàng";
		$smarty->assign("title",$title);
		require_once('auto_complete.php');
		if(!empty($chuoi))
		{
			$danh_sach_san_pham=$m_gio_hang->Lay_danh_sach_gio_hang($chuoi);
			$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
		}
		$smarty->display("layout.tpl");
		}
		
	}
	
	
		
}

?>