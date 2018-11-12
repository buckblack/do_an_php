<?php
@session_start();
include ("Smarty_quan_tri.php");
include ("models/m_user.php");
class C_user
{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$this->luu_dang_nhap($ten,$mk);

		}
		if(isset($_SESSION["user_fullname"]) )
		{
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->display("layout.tpl");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
	}
	
	function thoat_dang_nhap()
	{
		//session_destroy();
		unset($_SESSION['user_fullname']);
		unset($_SESSION['user_loai_user']);
		unset($_SESSION['user_ten_dang_nhap']);
		unset($_SESSION['error']);
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_user_theo_tenDn_pass($ten,$mk);
		
		if(!empty($user))
		{
			$_SESSION['user_fullname']=$user->ho_ten;
			$_SESSION['user_loai_user']=$user->ma_loai_nguoi_dung;
			$_SESSION['user_ten_dang_nhap']=$user->ten_dang_nhap;
		}
	}
	
	function Hien_thi_doi_mat_khau()
	{
			// Models
			if(isset($_POST['btn_xac_nhan']))
			{
				$mat_khau_moi=$_POST['mat_khau_moi'];
				$mat_khau_hien_tai=$_POST['mat_khau_hien_tai'];
				$ten_dang_nhap=$_SESSION['user_ten_dang_nhap'];
				$m_user=new M_user();
				$kq=$m_user->kiem_tra_mat_khau_hien_tai($ten_dang_nhap,$mat_khau_hien_tai);
				if(count($kq)>0)
				{
					$m_user->Doi_mat_khau($mat_khau_moi,$ten_dang_nhap,$mat_khau_hien_tai);
					echo "<script>alert('Đổi mật khẩu thành công');location='doi_mat_khau.php'</script>";
						
				}
				else
				{
					echo "<script>alert('Mật khẩu hiện tại không đúng');location='doi_mat_khau.php'</script>";
				}
			}
						
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Đổi mật khẩu");
			$smarty->assign("view","views/user/v_doi_mat_khau.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	function Hien_thi_them_user()
	{
			// Models
			if(isset($_POST['btn_them']))
			{
				$ma_loai=$_POST['loai_user'];
				$ho_ten=$_POST['ho_ten'];
				$ten_dang_nhap=$_POST['ten_dang_nhap'];
				$email=$_POST['email'];
				$mat_khau=$_POST['mat_khau'];
				$m_user=new M_user();
				$kq=$m_user->kiem_tra_ten_dang_nhap($ten_dang_nhap);
				if(count($kq)==0)
				{
					$m_user->Them_user($ma_loai,$ho_ten,$ten_dang_nhap,$email,$mat_khau);
					echo "<script>alert('Thêm thành công');location='themuser.php'</script>";
				}
				else
				{
					echo "<script>alert('Tên đăng nhập đã tồn tại');location='themuser.php'</script>";
				}
			}
			
			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Thêm User");
			$smarty->assign("view","views/user/v_them_user.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	
	function Hien_thi_danh_sach_user()
	{
			// Models
			$m_user=new M_user();
			$user=$_SESSION['user_ten_dang_nhap'];
			$danh_sach_user=$m_user->Doc_danh_sach_user($user);

			// View
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","GEAR STORE");
			$smarty->assign("tieude","Danh sách User");
			$smarty->assign("danh_sach_user",$danh_sach_user);
			$smarty->assign("view","views/user/v_user.tpl");
			$smarty->display("layout.tpl");	
	
	}
	
	
	function Xoa_user()
	{
		// Models
		if(isset($_GET["ten_dang_nhap"]))
		{
			$m_user=new M_user();
			$ten_dang_nhap=$_GET["ten_dang_nhap"];
			$kq=$m_user->Xoa_user($ten_dang_nhap);
			if($kq)
			{
				header("Location:user.php");	
			}
			
		}

	}
		
}
?>