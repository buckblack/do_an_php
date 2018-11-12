<?php
include_once("models/thu_vien.php");
include_once("models/Pager.php");
class C_chi_tiet_san_pham
{
	function Hien_thi_chi_tiet_san_pham()
	{
		include_once("models/m_chi_tiet_san_pham.php");
		$m_chi_tiet_san_pham=new M_chi_tiet_san_pham();
		$ma_san_pham=isset($_GET["ma_san_pham"])?$_GET["ma_san_pham"]:385;
		$san_pham=$m_chi_tiet_san_pham->Doc_san_pham_theo_ma($ma_san_pham);
		$san_pham_cung_loai=$m_chi_tiet_san_pham->Doc_san_pham_cung_loai($ma_san_pham,$san_pham->ma_loai);
		
		
		if(isset($_POST['btn_binh_luan']))
		{
			$nguoi_gui=$_POST['ten_khach_hang'];
			$noi_dung=$_POST['binh_luan'];
			$email=$_POST['email'];
			$dien_thoai=$_POST['dien_thoai'];
			$kq=$m_chi_tiet_san_pham->Them_binh_luan($ma_san_pham,$nguoi_gui,$noi_dung,$email,$dien_thoai);
			if($kq)
			{
				echo "<script>alert('Gửi bình luận thành công')</script>";
			}
		}
		$binh_luan=$m_chi_tiet_san_pham->Doc_binh_luan_theo_ma_san_pham($ma_san_pham);
		include_once("smarty/libs/Smarty.class.php");
		$smarty=new Smarty();
		$smarty->setTemplateDir("smarty/templates");
		$smarty->setCompileDir("smarty/templates_c");
		$view="views/v_chi_tiet_san_pham.tpl";
		$smarty->assign("view",$view);
		$trang_thai="Thông tin chi tiết sản phẩm";
		$smarty->assign("trang_thai",$trang_thai);
		$title="GEAR STORE | Thông tin chi tiết sản phẩm";
		$smarty->assign("title",$title);
		$smarty->assign("san_pham",$san_pham);
		$smarty->assign("binh_luan",$binh_luan);
		$smarty->assign("san_pham_cung_loai",$san_pham_cung_loai);
		require_once('auto_complete.php');
		$smarty->display("layout.tpl");
		
	}
}

?>