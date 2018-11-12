<?php
/* Smarty version 3.1.30, created on 2018-06-26 07:36:41
  from "E:\wamp64\www\GEAR_STORE\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b31ed09006e52_91148996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b6f26ac620b3d329174158484cf3fa678fd5a10' => 
    array (
      0 => 'E:\\wamp64\\www\\GEAR_STORE\\views\\v_dang_nhap.tpl',
      1 => 1529998565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b31ed09006e52_91148996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Đăng nhập</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="text" name="ten_dang_nhap" id="dang_nhap_ten_dang_nhap" placeholder="Tên đăng nhập" required >
					<input type="password" name="mat_khau" id="dang_nhap_mat_khau" placeholder="Mật khẩu" required >
					
					<input type="submit" name="btn_dang_nhap" onclick="return kiem_tra_thong_tin_dang_nhap()" value="Đăng nhập">
				</form>
			</div>
			<h4>Thành viên mới</h4>
			<p><a href="dang_ky">Đăng ký</a> (hoặc) Quay lại <a href=".">Trang chủ<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
        
	</div>
   
<!-- //login --><?php }
}
