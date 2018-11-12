<?php
/* Smarty version 3.1.30, created on 2018-06-24 08:54:28
  from "E:\wamp64\www\web06062018_3PM\views\v_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2f5c44ec9283_76633994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9df0c36471fbb8eb23cf79bb00d79bce950c9c7' => 
    array (
      0 => 'E:\\wamp64\\www\\web06062018_3PM\\views\\v_gio_hang.tpl',
      1 => 1529830455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b2f5c44ec9283_76633994 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'E:\\wamp64\\www\\web06062018_3PM\\smarty\\libs\\plugins\\modifier.replace.php';
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
        <caption style="text-align:right; font-weight:bold">
        <a href="#" onclick="xoa_gio_hang()">XOÁ GIỎ HÀNG</a>
        </caption>
        <thead>
          <tr>
            <th>STT</th>
            <th>Hình ảnh</th>
            <th>số lượng</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Xoá</th>
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
          <td class="invert-image"><a href="javascript:chi_tiet_san_pham('<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
','<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham,'"',' '),"'",' ');?>
')"><img style="width:70px" src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt=" " class="img-responsive" /></a></td>
          <td class="invert"><div class="quantity">
              <div class="quantity-select">
                <div class="entry value-minus" id="so_luong_<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
_1" ma_san_pham="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
">&nbsp;</div>
                <div class="entry value" id="so_sp<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
"><?php echo $_SESSION['gio_hang'][$_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham];?>
</div>
                <div class="entry value-plus active" id="so_luong_<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
_2" ma_san_pham="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
">&nbsp;</div>
              </div>
              <?php echo '<script'; ?>
>
                                $("#so_luong_<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
_2").click(function(){
									var $key=$(this).attr("ma_san_pham")
									var $don_gia=$(this).attr("don_gia")
									var $so_luong=$("#so_sp<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
").text()
									
										var form_data = {
											"ma_san_pham":$key,
											"so_luong_cong":$so_luong,
											"don_gia":$don_gia
											};	
											
										$.ajax(
										{
											url: "mua_hang.php", 
											data:form_data,
											type:"POST",
											success: function(data)
											{
												$("#tinh_tong_tien").html(data).text()
											}
										});
                                	})
									
								$("#so_luong_<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
_1").click(function(){
									var $key=$(this).attr("ma_san_pham")
									var $don_gia=$(this).attr("don_gia")
									var $so_luong=$("#so_sp<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
").text()
										var form_data = {
											"ma_san_pham":$key,
											"so_luong_tru":$so_luong,
											"don_gia":$don_gia
											};	
											
										$.ajax(
										{
											url: "mua_hang.php", 
											data:form_data,
											type:"POST",
											success: function(data)
											{
												$("#tinh_tong_tien").html(data).text()
											}
										});
                                	})
                                <?php echo '</script'; ?>
> 
            </div></td>
          <td class="invert"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</td>
          <td class="invert"><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</td>
          <td class="invert"><div class="rem">
              <div class="close1" id="close<?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
" ma_san_pham="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
"></div>
            </div>
            <?php echo '<script'; ?>
>$(document).ready(function(c) {
								$('#close<?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
').on('click', function(c){
									if(confirm('Bạn có chắc muốn xoá'))
									{
										var $key=$(this).attr("ma_san_pham");
										var $don_gia=$(this).attr("don_gia");
										var form_data = {
											"ma_san_pham":$key,
											"don_gia":$don_gia
											};	
											
										$.ajax(
										{
											url: "xoa_hang.php", 
											data:form_data,
											type:"POST",
											success: function(data)
											{
												$("#tinh_tong_tien").html(data).text()
											}
										});
										
										$.ajax(
										{
											url: "cap_nhat_gio_hang.php", 
											success: function(data)
													{
														$("#so_san_pham").html(data)
													}
											
										});
										
										$('.rem<?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
').fadeOut('slow', function(c){
											$('.rem<?php echo $_smarty_tpl->tpl_vars['dem']->value;?>
').remove();
										});
									}
									
										});	
									
									  
								});
						   <?php echo '</script'; ?>
></td>
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
    <div class="checkout-left">
      <div class="checkout-left-basket">
        <h4><a href="xac_nhan_thanh_toan" style="color:#FFF">tiến hành Thanh toán</a></h4>
      </div>
      <div class="checkout-right-basket"> <a href="."><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua sắm</a> </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <?php } else { ?>
  <p align="center" style="color:#F00; font-size:24px; font-weight:bold">Chưa có sản phẩm nào trong giỏ</p>
  <?php }?> </div>

<!-- //checkout --><?php }
}
