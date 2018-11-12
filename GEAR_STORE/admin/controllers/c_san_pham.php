<?php
@session_start();
include_once ("Smarty_quan_tri.php");
include_once("models/m_san_pham.php");
include_once("Pager.php");
class C_san_pham
{
	function Hien_thi_danh_sach_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$san_pham=$m_san_pham->Doc_tat_ca_san_pham();
						
			$p=new pager();
			$limit=20;
			$count=count($san_pham);
			$pages=$p->findPages($count,$limit);
			$vt=$p->findStart($limit);
			$curpage=$_GET["page"];
			$thanh_phan_trang=$p->pageList($curpage,$pages);
			$danh_sach_san_pham=$m_san_pham->Doc_danh_sach_san_pham($vt,$limit);
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Danh sách sản phẩm");
			$smarty->assign("danh_sach_san_pham",$danh_sach_san_pham);
			$smarty->assign("thanh_phan_trang",$thanh_phan_trang);
			$smarty->assign("view","views/san_pham/v_sanpham.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	function Hien_thi_tim_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$danh_sach_san_pham=array();
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Tìm sản phẩm");
			$smarty->assign("view","views/san_pham/v_tim_san_pham.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	
	function Them_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$danh_sach_loai_san_pham=$m_san_pham->Doc_danh_sach_loai_san_pham();
			//$ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh
			if(isset($_POST["btn_them"]))
			{
				$ten_san_pham=$_POST["ten_san_pham"];
				$ma_loai=$_POST["loai_san_pham"];
				$mo_ta_chi_tiet=$_POST["mo_ta_chi_tiet"];
				$don_gia=$_POST["don_gia"];
				$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:""; 
				$kq=$m_san_pham->Them_san_pham($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh);
				if($kq)
				{
					if($hinh!="")
					{
						$thu_muc=$m_san_pham->Lay_thu_muc($ma_loai);
						move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/$thu_muc/$hinh");
					}
					echo "<script>alert('Thêm thành công');location='san_pham.php'</script>";
				}
				
			}
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Thêm sản phẩm");
			$smarty->assign("danh_sach_loai_san_pham",$danh_sach_loai_san_pham);
			$smarty->assign("view","views/san_pham/v_Themsanpham.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	
	function Sua_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$danh_sach_loai_san_pham=$m_san_pham->Doc_danh_sach_loai_san_pham();
			if(isset($_GET["ma_san_pham"]))
			{
				$ma_san_pham=$_GET["ma_san_pham"];
				$san_pham=$m_san_pham->Doc_san_pham_theo_ma($ma_san_pham);
				if(isset($_POST["btnCapnhat"]))
				{
					$ma_san_pham=$_POST["ma_san_pham"];
					$ten_san_pham=$_POST["ten_san_pham"];
					$ma_loai=$_POST["loai_san_pham"];
					$mo_ta_chi_tiet=$_POST["mo_ta_chi_tiet"];
					$don_gia=$_POST["don_gia"];
					$hinh=$_FILES["f_hinh"]["error"]==0?$_FILES["f_hinh"]["name"]:$san_pham->hinh; 
					$kq=$m_san_pham->Cap_nhat_san_pham($ten_san_pham,$ma_loai,$mo_ta_chi_tiet,$don_gia,$hinh,$ma_san_pham);
					if($kq)
					{
						if($_FILES["f_hinh"]["error"]==0)
						{
							$thu_muc=$m_san_pham->Lay_thu_muc($ma_loai);
							move_uploaded_file($_FILES["f_hinh"]["tmp_name"],"../public/images/$thu_muc/$hinh");
						}
						echo "<script>alert('Cập nhật thành công');location='san_pham.php'</script>";	
					}
					
				}
		
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Sửa sản phẩm");
			$smarty->assign("san_pham",$san_pham);
			$smarty->assign("danh_sach_loai_san_pham",$danh_sach_loai_san_pham);
			$smarty->assign("view","views/san_pham/v_sua_san_pham.tpl");
			$smarty->display("layout.tpl");	
			}
	
	}
	
	function Xoa_san_pham()
	{
		// Models
		if(isset($_GET["ma_san_pham"]))
		{
			$m_san_pham=new M_san_pham();
			$ma_san_pham=$_GET["ma_san_pham"];
			$kq=$m_san_pham->Xoa_san_pham($ma_san_pham);
			if($kq)
			{
				header("Location:san_pham.php");	
			}
			
		}

	}
	
	function Hien_thi_them_loai_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$danh_sach_loai_san_pham=$m_san_pham->Doc_danh_sach_loai_san_pham_cha();
			if(isset($_POST['btn_them']))
			{
				$ma_loai_cha=$_POST['loai_san_pham'];
				$ten_loai=$_POST['them_loai_ten_loai'];
				$thu_muc=$m_san_pham->Lay_thu_muc($ma_loai_cha);
				$kq=$m_san_pham->Them_loai_san_pham($ten_loai,$ma_loai_cha,$thu_muc);
				if($kq)
				{
					echo "<script>alert('Thêm thành công');location='loai_san_pham.php'</script>";
				}
				else
				{
					echo "<script>alert('Thêm thất bại');location='loai_san_pham.php'</script>";
				}
			}

			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Thêm loại sản phẩm");
			$smarty->assign("danh_sach_loai_san_pham",$danh_sach_loai_san_pham);
			$smarty->assign("view","views/loai_san_pham/v_them_loai_san_pham.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	function Hien_thi_sua_loai_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$danh_sach_loai_san_pham=$m_san_pham->Doc_danh_sach_loai_san_pham_cha();
			$ma_loai=$_GET['ma_loai_san_pham'];
			$loai_san_pham=$m_san_pham->Doc_loai_san_pham_theo_ma($ma_loai);
			if(isset($_POST['btn_cap_nhat']))
			{
				$ma_loai_cha=$_POST['loai_san_pham'];
				$ten_loai=$_POST['them_loai_ten_loai'];
				$thu_muc=$m_san_pham->Lay_thu_muc($ma_loai_cha);
				$ma_loai=$_POST['them_loai_ma_loai'];
				$kq=$m_san_pham->Cap_nhat_loai_san_pham($ten_loai,$ma_loai_cha,$thu_muc,$ma_loai);
				if($kq)
				{
					echo "<script>alert('Sửa thành công');location='loai_san_pham.php'</script>";
				}
				else
				{
					echo "<script>alert('Sửa thất bại');location='loai_san_pham.php'</script>";
				}
			}

			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Sửa loại sản phẩm");
			$smarty->assign("danh_sach_loai_san_pham",$danh_sach_loai_san_pham);
			$smarty->assign("loai_san_pham",$loai_san_pham);
			$smarty->assign("view","views/loai_san_pham/v_sua_loai_san_pham.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	function Hien_thi_loai_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$danh_sach_loai_san_pham=$m_san_pham->Doc_danh_sach_loai_san_pham();

			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Danh sách loại sản phẩm");
			$smarty->assign("danh_sach_loai_san_pham",$danh_sach_loai_san_pham);
			$smarty->assign("view","views/loai_san_pham/v_loai_san_pham.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	
	
		
}
?>