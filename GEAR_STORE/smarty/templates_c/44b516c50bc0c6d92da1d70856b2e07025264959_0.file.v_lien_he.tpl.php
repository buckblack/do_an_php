<?php
/* Smarty version 3.1.30, created on 2018-06-27 09:23:28
  from "E:\wamp64\www\GEAR_STORE\views\v_lien_he.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b335790d938e5_03530326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44b516c50bc0c6d92da1d70856b2e07025264959' => 
    array (
      0 => 'E:\\wamp64\\www\\GEAR_STORE\\views\\v_lien_he.tpl',
      1 => 1529895452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b335790d938e5_03530326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //breadcrumbs -->
<!-- contact -->
	<div class="about">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 w3_agileits_contact_grid_left">
				<div class="agile_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3905851087434!2d-34.90500565012194!3d-8.061582082752993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d90992e4ab%3A0x8e83c4afabe39a3a!2sSport+Club+Do+Recife!5e0!3m2!1sen!2sin!4v1478684415917" style="border:0"></iframe>
				</div>
				
			</div>
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h2 class="w3_agile_header">liên hệ</h2>

				<form action="#" method="post">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro"  type="text" id="input-25" value="<?php if (isset($_SESSION['khach_hang_ho_ten'])) {
echo $_SESSION['khach_hang_ho_ten'];
}?>" name="ho_ten" placeholder=" " required />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Họ tên</span>
						</label>
					</span>
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-26" value="<?php if (isset($_SESSION['khach_hang_email'])) {
echo $_SESSION['khach_hang_email'];
}?>" name="email" placeholder=" " requred />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Email</span>
						</label>
					</span>
                    <span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="text" id="input-27" value="<?php if (isset($_SESSION['khach_hang_dien_thoai'])) {
echo $_SESSION['khach_hang_dien_thoai'];
}?>" name="dien_thoai" placeholder=" " required />
						<label class="input__label input__label--ichiro" for="input-27">
							<span class="input__label-content input__label-content--ichiro">Điện thoại</span>
						</label>
					</span>
					<textarea name="noi_dung" placeholder="Lời nhắn..." required></textarea>
					<input type="submit" name="submit" value="Gửi">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- contact --><?php }
}
