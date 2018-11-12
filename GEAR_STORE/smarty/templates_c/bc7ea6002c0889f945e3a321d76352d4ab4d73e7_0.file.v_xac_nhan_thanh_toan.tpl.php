<?php
/* Smarty version 3.1.30, created on 2018-06-26 10:07:22
  from "E:\wamp64\www\GEAR_STORE\views\v_xac_nhan_thanh_toan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b32105a533b03_79809767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7ea6002c0889f945e3a321d76352d4ab4d73e7' => 
    array (
      0 => 'E:\\wamp64\\www\\GEAR_STORE\\views\\v_xac_nhan_thanh_toan.tpl',
      1 => 1529920334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b32105a533b03_79809767 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->


<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!-- //breadcrumbs --> 
<!-- checkout -->

<div class="checkout"> <?php if (isset($_smarty_tpl->tpl_vars['danh_sach_san_pham']->value)) {?>
  <div class="container">
    <div class="checkout-right">
      <table class="timetable_sub">
        <thead>
          <tr>
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>số lượng</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
          </tr>
        </thead>
        <?php $_smarty_tpl->_assignInScope('dem', 0);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('dem', $_smarty_tpl->tpl_vars['dem']->value+1);
?>
        <tr class="rem<?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
">
          <td class="invert"><?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
</td>
          <td class="invert-image"><a href="san-pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
-<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
"><img style="width:70px" src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt=" " class="img-responsive" /></a></td>
          <td class="invert"><div class="quantity">
              <div class="quantity-select">
                <div class="entry value" id="so_sp<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
"><?php echo $_SESSION['gio_hang'][$_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham];?>
</div>
              </div>
              
            </div></td>
          <td class="invert"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</td>
          <td class="invert"><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</td>
          
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr class="rem3">
          <td style="font-size:20px; font-weight:bold" colspan="6" class="invert">Tổng tiền: <span id="tinh_tong_tien"><?php if (isset($_SESSION['tong_tien'])) {
echo number_format($_SESSION['tong_tien']);
}?></span> VNĐ</td>
        </tr>
        <!--quantity--> 
        <?php echo '<script'; ?>
>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									<?php echo '</script'; ?>
> 
        <!--quantity-->
      </table>
    </div>
    
    
    <div class="register" style="margin-bottom:-50px; margin-top:-50px">
		<div class="container">
			<h2>Thông tin nhận hàng</h2>
			<div class="login-form-grids">
					<form method="post" action="">
                    <input style="margin-bottom:15px" type="text" value="<?php if (isset($_SESSION['khach_hang_ho_ten'])) {
echo $_SESSION['khach_hang_ho_ten'];
}?>" id="ten_khach_hang" placeholder="Họ tên" required name="ten_khach_hang" />
					<input style="margin-bottom:15px" type="email" value="<?php if (isset($_SESSION['khach_hang_email'])) {
echo $_SESSION['khach_hang_email'];
}?>" placeholder="Email" name="email" id="email" required >
					<input style="margin-bottom:15px" type="text" value="<?php if (isset($_SESSION['khach_hang_dia_chi'])) {
echo $_SESSION['khach_hang_dia_chi'];
}?>" placeholder="Địa chỉ nhận hàng" name="dia_chi" id="dia_chi" required >
					<input type="text" placeholder="Số điện thoại" value="<?php if (isset($_SESSION['khach_hang_dien_thoai'])) {
echo $_SESSION['khach_hang_dien_thoai'];
}?>" name="dien_thoai" id="dien_thoai" required >
                    <!--<input type="radio" name="hinh_thuc_thanh_toan" value="tien_mat" checked="checked"> Tiền mặt
                    <input type="radio" name="hinh_thuc_thanh_toan" value="Thẻ tín dụng"> Thẻ tín dụng
                    <input type="radio" name="hinh_thuc_thanh_toan" value="Chuyển khoản"> Chuyển khoản
                     -->
				
			</div>
			
		</div>
	</div>
        <div class="snipcart-details top_brand_home_details" >
        
		<input type="submit" value="Xác nhận" name="xac_nhan" class="button" onclick="" style="width:200px; font-size:24px; font-weight:bold" />
        </form>
        
		</div>

    </div>
  </div>
  <?php } else { ?>
  <p align="center" style="color:#F00; font-size:24px; font-weight:bold">Chưa có sản phẩm nào trong giỏ</p>
  <?php }?> </div>

<!-- //checkout --><?php }
}
