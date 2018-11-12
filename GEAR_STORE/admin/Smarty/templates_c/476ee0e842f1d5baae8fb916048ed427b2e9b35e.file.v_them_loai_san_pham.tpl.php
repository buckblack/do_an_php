<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 09:16:38
         compiled from "views\loai_san_pham\v_them_loai_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62385b2ca717a7aea2-54814257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476ee0e842f1d5baae8fb916048ed427b2e9b35e' => 
    array (
      0 => 'views\\loai_san_pham\\v_them_loai_san_pham.tpl',
      1 => 1529745177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62385b2ca717a7aea2-54814257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2ca717abadc0_41083099',
  'variables' => 
  array (
    'tieude' => 0,
    'danh_sach_loai_san_pham' => 0,
    'loai_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ca717abadc0_41083099')) {function content_5b2ca717abadc0_41083099($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>

		<p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="them_loai_ten_loai" name="them_loai_ten_loai" value="" />
		  </p>
          <p>
            <label>Loại sản phẩm</label>
            <select class="text-input small-input" type="text" id="loai_san_pham" name="loai_san_pham" />
            <?php  $_smarty_tpl->tpl_vars['loai_san_pham'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai_san_pham']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_sach_loai_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai_san_pham']->key => $_smarty_tpl->tpl_vars['loai_san_pham']->value){
$_smarty_tpl->tpl_vars['loai_san_pham']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['loai_san_pham']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_san_pham']->value->ten_loai;?>
</option>
            <?php } ?>
            </select>
          </p>

          <p>
            <input class="button" type="submit" value="Thêm" name="btn_them" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>