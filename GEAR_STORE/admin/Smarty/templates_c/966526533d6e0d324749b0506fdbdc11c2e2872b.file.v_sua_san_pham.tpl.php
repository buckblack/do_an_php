<?php /* Smarty version Smarty-3.1.14, created on 2018-06-14 11:44:54
         compiled from "views\san_pham\v_sua_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103445b224b05b806e5-75975693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '966526533d6e0d324749b0506fdbdc11c2e2872b' => 
    array (
      0 => 'views\\san_pham\\v_sua_san_pham.tpl',
      1 => 1528976689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103445b224b05b806e5-75975693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b224b05cac279_99811092',
  'variables' => 
  array (
    'tieude' => 0,
    'san_pham' => 0,
    'danh_sach_loai_san_pham' => 0,
    'loai_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b224b05cac279_99811092')) {function content_5b224b05cac279_99811092($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
         
            <input hidden="" class="text-input small-input" type="text" id="ma_san_pham" name="ma_san_pham" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" />
        
          <p>
            <label>Tên sản phẩm</label>
            <input class="text-input small-input" type="text" id="ten_san_pham" name="ten_san_pham" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
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
          
            <label>Nội dung</label>
            <textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet"  class="ckeditor" ><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta_chi_tiet;?>
</textarea>
            <script>
			CKEDITOR.replace( 'mo_ta_chi_tiet', { customConfig : 'config_lien_he.js' } );
			</script>
            
          </p>
          <p>
            <label>Đơn giá</label>
            <input class="text-input small-input" type="text" id="don_gia" name="don_gia" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" />
		  </p>
          <p>
            <label>Hình</label>
            <input type="file" name="f_hinh" />
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return kiem_tra_san_pham()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>