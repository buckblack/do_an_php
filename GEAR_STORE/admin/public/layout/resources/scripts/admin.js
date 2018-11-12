// JavaScript Document
function kiem_tra_tin_tuc()
{
	var tieu_de=document.getElementById("tieu_de");
	if(tieu_de.value=="")
	{
		alert("Nhập tin tức");
		tieu_de.focus();
		return false;	
	}
	return true;
	
}
function xoa_tin_tuc(ma_tin_tuc)
{
	if(confirm('Bạn xóa tin hiện hành?\nCẩn thận'))
	{
		window.location="xoatintuc.php?ma_tin_tuc=" + ma_tin_tuc;		
	}	
}

function xoa_user(ten_dang_nhap)
{
	
	if(confirm('Bạn xóa user '+ten_dang_nhap+' ?\nCẩn thận'))
	{
		window.location="xoa_user.php?ten_dang_nhap=" + ten_dang_nhap;		
	}	
}
function kiem_tra_tim_san_pham()
{
	var ten_san_pham=document.getElementById("ten_san_pham")
	if(ten_san_pham.value.trim()=="")
	{
		alert("Chưa nhập tên sản phẩm")
		ten_san_pham.focus()
		return false	
	}
	return true
}


function kiem_tra_san_pham()
{
	var ten_san_pham=document.getElementById("ten_san_pham")
	var don_gia=document.getElementById("don_gia")
	if(ten_san_pham.value.trim()=="")
	{
		alert("Chưa nhập tên sản phẩm")
		ten_san_pham.focus()
		return false	
	}
	if(don_gia.value.trim()=="")
	{
		alert("Chưa nhập đơn giá")
		don_gia.focus()
		return false
	}
	if(isNaN(don_gia.value))
	{
		alert("Đơn giá không hợp lệ")
		don_gia.focus()
		return false
	}
	return true
	
}


function xoa_san_pham(ma_san_pham)
{
	if(confirm('Bạn xóa sản phẩm mã: '+ma_san_pham+' ?\nCẩn thận'))
	{
		window.location="xoa_san_pham.php?ma_san_pham=" + ma_san_pham;		
	}	
}

function kiem_tra_user()
{
	var mat_khau_hien_tai=document.getElementById("mat_khau_hien_tai")
	var mat_khau_moi=document.getElementById("mat_khau_moi")
	var nhap_lai_mat_khau_moi=document.getElementById("nhap_lai_mat_khau_moi")
	if(mat_khau_hien_tai.value.trim()=="")
	{
		alert("Chưa nhập mật khẩu hiện tại")
		mat_khau_hien_tai.focus()
		return false	
	}
	if(mat_khau_moi.value.trim()=="")
	{
		alert("Chưa nhập mật khẩu mới")
		mat_khau_moi.focus()
		return false	
	}
	if(nhap_lai_mat_khau_moi.value.trim()!=mat_khau_moi.value.trim())
	{
		alert("Mật khẩu không trùng khớp")
		nhap_lai_mat_khau_moi.focus()
		return false	
	}
	return true
}


function kiem_tra_them_user()
{
	var ho_ten=document.getElementById("ho_ten")
	var ten_dang_nhap=document.getElementById("ten_dang_nhap")
	var email=document.getElementById("email")
	var mat_khau=document.getElementById("mat_khau")
	var nhap_lai_mat_khau=document.getElementById("nhap_lai_mat_khau")
	if(ho_ten.value.trim()=="")
	{
		alert("Chưa nhập họ tên")
		ho_ten.focus()
		return false	
	}
	if(ten_dang_nhap.value.trim()=="")
	{
		alert("Chưa nhập tên đăng nhập")
		ten_dang_nhap.focus()
		return false	
	}
	if(email.value.trim()=="")
	{
		alert("Chưa nhập email")
		email.focus()
		return false	
	}
	if(mat_khau.value.trim()=="")
	{
		alert("Chưa nhập mật khẩu")
		mat_khau.focus()
		return false	
	}
	if(nhap_lai_mat_khau.value.trim()!=mat_khau.value.trim())
	{
		alert("Mật khẩu không trùng khớp")
		nhap_lai_mat_khau.focus()
		return false	
	}
	return true
}


function thanh_toan(ma_hoa_don)
{
	if(confirm('Bạn muốn thanh toán hoá đơn : '+ma_hoa_don+' ?\nCẩn thận'))
	{
		window.location="thanh_toan.php?ma_hoa_don=" + ma_hoa_don;		
	}	
}




