<?php
/* Smarty version 3.1.30, created on 2018-06-25 09:52:41
  from "E:\wamp64\www\GEAR_STORE\views\v_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b30bb69793935_05752877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a741898ce97930b70eda569ff30cdebd5598c13' => 
    array (
      0 => 'E:\\wamp64\\www\\GEAR_STORE\\views\\v_san_pham.tpl',
      1 => 1529920285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b30bb69793935_05752877 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->

<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!-- //breadcrumbs --> 
<!--- beverages --->

<div class="products">
<div class="container" style="margin-top:-50px">
  <div class="col-md-12 products-right"> 

    <?php if ((count($_smarty_tpl->tpl_vars['danh_sach_san_pham']->value)) > 0) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left" style="padding-bottom:30px">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb"><a href="san-pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
-<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
"><img title=" " width="200px" height="150px" alt=" " src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
"></a>
                      <div style="height:80px">
                        <p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</p>
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
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <div class="clearfix"> </div>
      <nav class="numbering"> <?php if (isset($_smarty_tpl->tpl_vars['thanh_phan_trang']->value)) {
echo $_smarty_tpl->tpl_vars['thanh_phan_trang']->value;
}?> </nav>
      <?php } else { ?>
      <p align="center" style="color:#F00; font-size:24px; font-weight:bold">Không tìm thấy sản phẩm nào với từ khoá: <?php echo $_SESSION['tim_kiem'];?>
</p>
      <?php }?>
    </div>


    <div class="clearfix"> </div>
  </div>
</div>
<!--- beverages ---><?php }
}
