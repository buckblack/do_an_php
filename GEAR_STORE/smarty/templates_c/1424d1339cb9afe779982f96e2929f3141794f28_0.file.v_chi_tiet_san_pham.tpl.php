<?php
/* Smarty version 3.1.30, created on 2018-06-25 09:52:30
  from "E:\wamp64\www\GEAR_STORE\views\v_chi_tiet_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b30bb5e7cbd82_62488503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1424d1339cb9afe779982f96e2929f3141794f28' => 
    array (
      0 => 'E:\\wamp64\\www\\GEAR_STORE\\views\\v_chi_tiet_san_pham.tpl',
      1 => 1529920254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b30bb5e7cbd82_62488503 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</h2>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Mô tả :</h4>
						<p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta_chi_tiet;?>
</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing"><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" id="">
									<input type="hidden" name="currency_code" value="VND">											
									<input type="button" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" value="thêm vào giỏ" class="button" >
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Sản phẩm cùng loại</h3>
				<div class="agile_top_brands_grids">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['san_pham_cung_loai']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="san-pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
-<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
"><img title=" " height="150px" width="200px" alt=" " src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
"></a>		
												<div style="height:80px"><p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</p></div>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														
														<input type="hidden" id="don_gia(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
)">
														<input type="hidden" name="currency_code" value="VND">											
														<input type="button" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" value="thêm vào giỏ" class="button" >
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
    
<!-- //new -->
<div class="products">
		<div class="container">
			
            <h3>Bình luận:</h3>
            <form  method="post">
			<textarea name="binh_luan" id="binh_luan" class="ckeditor"></textarea>
            <?php echo '<script'; ?>
>
			CKEDITOR.replace( 'binh_luan', { customConfig : 'config_binh_luan.js' } );
			<?php echo '</script'; ?>
>
            <div align="left" class="login-form-grids">
				<h5>Thông tin cá nhân</h5>
					<input type="text" name="ten_khach_hang"  value="<?php if (isset($_SESSION['khach_hang_ho_ten'])) {
echo $_SESSION['khach_hang_ho_ten'];
}?>" id="bl_ten_kh" placeholder="Họ tên..." required >
					<input style="margin-bottom:15px" type="email" value="<?php if (isset($_SESSION['khach_hang_email'])) {
echo $_SESSION['khach_hang_email'];
}?>" id="bl_email" name="email" placeholder="Địa chỉ Email" required >
					<input type="text" name="dien_thoai" value="<?php if (isset($_SESSION['khach_hang_dien_thoai'])) {
echo $_SESSION['khach_hang_dien_thoai'];
}?>" id="bl_dien_thoai" placeholder="Nhập số điện thoại" required >
					<input type="submit" name="btn_binh_luan" onclick="return kiem_tra_binh_luan()" value="Gửi bình luận">

			</div>
            </form>
            
            <div >
            <?php if ((count($_smarty_tpl->tpl_vars['binh_luan']->value)) > 0) {?>
			<table style="margin-top:50px" width="100%">
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['binh_luan']->value, 'bl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bl']->value) {
?>
            	<tr style="border:#000 solid 1px;">
                	<td width="3%">&bull;</td>
                	<td width="17%"><?php echo $_smarty_tpl->tpl_vars['bl']->value->nguoi_gui;?>
:&nbsp;&nbsp;</td>
                    <td width="18%"><?php echo $_smarty_tpl->tpl_vars['bl']->value->ngay_dang;?>
:&nbsp;&nbsp;</td>
                    <td width="62%"><?php echo $_smarty_tpl->tpl_vars['bl']->value->noi_dung;?>
</td>
                </tr>
                <tr><td colspan="3">&nbsp;</td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table></div>
			<?php }?>
			</div>
			
		</div>
        </div><?php }
}
