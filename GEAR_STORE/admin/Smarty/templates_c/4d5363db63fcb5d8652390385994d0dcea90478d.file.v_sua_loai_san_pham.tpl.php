<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 09:30:12
         compiled from "views\loai_san_pham\v_sua_loai_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186285b2e10531f6bc3-15389635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d5363db63fcb5d8652390385994d0dcea90478d' => 
    array (
      0 => 'views\\loai_san_pham\\v_sua_loai_san_pham.tpl',
      1 => 1529746198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186285b2e10531f6bc3-15389635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2e105322d1f4_32788532',
  'variables' => 
  array (
    'tieude' => 0,
    'loai_san_pham' => 0,
    'danh_sach_loai_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2e105322d1f4_32788532')) {function content_5b2e105322d1f4_32788532($_smarty_tpl) {?><div class="content-box-header">
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
            
            <input hidden="" class="text-input small-input" type="text" id="them_loai_ma_loai" name="them_loai_ma_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_san_pham']->value->ma_loai;?>
" />
		  </p>
		<p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="them_loai_ten_loai" name="them_loai_ten_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_san_pham']->value->ten_loai;?>
" />
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
            <input class="button" type="submit" value="Cập nhật" name="btn_cap_nhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>