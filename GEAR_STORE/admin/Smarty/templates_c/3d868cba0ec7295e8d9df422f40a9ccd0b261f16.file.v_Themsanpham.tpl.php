<?php /* Smarty version Smarty-3.1.14, created on 2018-06-22 07:25:08
         compiled from "views\san_pham\v_Themsanpham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95715b2b8451095ba2-86499788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d868cba0ec7295e8d9df422f40a9ccd0b261f16' => 
    array (
      0 => 'views\\san_pham\\v_Themsanpham.tpl',
      1 => 1529651910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95715b2b8451095ba2-86499788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2b8451105071_42418796',
  'variables' => 
  array (
    'tieude' => 0,
    'danh_sach_loai_san_pham' => 0,
    'loai_san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2b8451105071_42418796')) {function content_5b2b8451105071_42418796($_smarty_tpl) {?><div class="content-box-header">
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
            <label>Tên sản phẩm</label>
            <input class="text-input small-input" type="text" id="ten_san_pham" name="ten_san_pham" value="" />
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
            <textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet"  class="ckeditor" ></textarea>
            <script>
			CKEDITOR.replace( 'mo_ta_chi_tiet', { customConfig : 'config_lien_he.js' } );
			</script>
            
          </p>
          <p>
            <label>Đơn giá</label>
            <input class="text-input small-input" type="text" id="don_gia" name="don_gia" value="" />
		  </p>
          <p>
            <label>Hình</label>
            <input type="file" name="f_hinh" />
          <p>
            <input class="button" type="submit" value="Thêm" name="btn_them" onclick="return kiem_tra_san_pham()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>