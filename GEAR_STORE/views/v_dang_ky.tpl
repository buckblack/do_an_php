<!-- breadcrumbs -->
	{include file="thanh_trang_thai.tpl"}
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Đăng ký</h2>
			<div class="login-form-grids">
				<h5>Thông tin cá nhân</h5>
				<form  method="post">
					<input type="text" name="ten_khach_hang" id="dang_ky_ten_khach_hang" placeholder="Họ tên..." required >
					<input type="text" name="dia_chi" id="dang_ky_dia_chi" placeholder="Địa chỉ..." required >
                    <input type="text" name="dien_thoai" id="dang_ky_dien_thoai" placeholder="Điện thoại..." required >
				
				
				<h6>Thông tin đăng nhập</h6>
					<input style="margin-bottom:15px" type="text" name="ten_dang_nhap" id="dang_ky_ten_dang_nhap" placeholder="Tên đăng nhập" required >
                    
					<input type="email" name="email" id="dang_ky_email" placeholder="Địa chỉ Email" required >
					<input type="password" name="mat_khau" id="dang_ky_mat_khau" placeholder="Mật khẩu" required >
					<input type="password" name="nhap_lai_mat_khau" id="dang_ky_nhap_lai_mat_khau"  placeholder="Nhập lại mật khẩu" required >
					
					<input type="submit" name="btn_dang_ky" value="Đăng ký" onclick="return kiem_tra_thong_tin_dang_ky()">
				</form>
			</div>
			
		</div>
	</div>
<!-- //register -->