<?php
@session_start();
include_once("Smarty_quan_tri.php");
include_once("models/m_hoa_don.php");
include_once("controllers/Pager.php");
class C_hoa_don
{
	function Hien_thi_hoa_don_da_thanh_toan()
	{

		$m_hoa_don=new M_hoa_don();
		$danh_sach_hoa_don=$m_hoa_don->Doc_hoa_don_da_thanh_toan();
		$p=new pager();
		$limit=20;
		$count=count($danh_sach_hoa_don);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_hoa_don=$m_hoa_don->Doc_hoa_don_da_thanh_toan($vt,$limit);
		// View
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","GEAR STORE");
		$smarty->assign("tieude","Danh sách hoá đơn đã thanh toán");
		$smarty->assign("danh_sach_hoa_don",$danh_sach_hoa_don);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("view","views/hoa_don/v_hoa_don_da_thanh_toan.tpl");
		$smarty->display("layout.tpl");	
	}
	
	function Hien_thi_hoa_don_chua_thanh_toan()
	{

		$m_hoa_don=new M_hoa_don();
		$danh_sach_hoa_don=$m_hoa_don->Doc_hoa_don_chua_thanh_toan();
		$p=new pager();
		$limit=20;
		$count=count($danh_sach_hoa_don);
		$pages=$p->findPages($count,$limit);
		$vt=$p->findStart($limit);
		$curpage=$_GET["page"];
		$thanh_phan_trang=$p->pageList($curpage,$pages);
		$danh_sach_hoa_don=$m_hoa_don->Doc_hoa_don_chua_thanh_toan($vt,$limit);
		// View
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","GEAR STORE");
		$smarty->assign("tieude","Danh sách hoá đơn chưa thanh toán");
		$smarty->assign("danh_sach_hoa_don",$danh_sach_hoa_don);
		$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
		$smarty->assign("view","views/hoa_don/v_hoa_don_chua_thanh_toan.tpl");
		$smarty->display("layout.tpl");	
	}
	
	function thanh_toan()
	{

		$m_hoa_don=new M_hoa_don();
		$ma_hoa_don=$_GET['ma_hoa_don'];
		$kq=$m_hoa_don->thanh_toan($ma_hoa_don);
		if($kq)
		{
			header("location:hoa_don_da_thanh_toan");
		}
		
	}
	
	
	function Hien_thi_tim_hoa_don()
	{

		$m_hoa_don=new M_hoa_don();
		// View
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","GEAR STORE");
		$smarty->assign("tieude","Tìm hoá đơn");
		$smarty->assign("view","views/hoa_don/v_tim_hoa_don.tpl");
		$smarty->display("layout.tpl");	
	}
	
	function Hien_thi_chi_tiet_hoa_don()
	{

		$m_hoa_don=new M_hoa_don();
		$ma_hoa_don=$_GET['ma_hoa_don'];
		$chi_tiet_hoa_don=$m_hoa_don->Doc_chi_tiet_hoa_don($ma_hoa_don);
		// View
		$smarty=new Smarty_quan_tri();
		$smarty->assign("title","GEAR STORE");
		$smarty->assign("tieude","Chi tiêt hoá đơn");
		$smarty->assign("chi_tiet_hoa_don",$chi_tiet_hoa_don);
		$smarty->assign("view","views/hoa_don/v_chi_tiet_hoa_don.tpl");
		$smarty->display("layout.tpl");	
	}
	
	
}
?>