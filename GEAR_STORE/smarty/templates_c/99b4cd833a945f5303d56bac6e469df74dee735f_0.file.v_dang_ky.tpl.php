<?php
/* Smarty version 3.1.30, created on 2018-06-25 01:19:28
  from "E:\wamp64\www\web06062018_3PM\views\v_dang_ky.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b304320998ef6_84210161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b4cd833a945f5303d56bac6e469df74dee735f' => 
    array (
      0 => 'E:\\wamp64\\www\\web06062018_3PM\\views\\v_dang_ky.tpl',
      1 => 1529889564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b304320998ef6_84210161 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
					<input type="password" name="nhap_lai_mat_khau" id="dang_ky_nhap_lai_mat_khau" placeholder="Nhập lại mật khẩu" required >
					
					<input type="submit" name="btn_dang_ky" value="Đăng ký">
				</form>
			</div>
			
		</div>
	</div>
<!-- //register --><?php }
}
