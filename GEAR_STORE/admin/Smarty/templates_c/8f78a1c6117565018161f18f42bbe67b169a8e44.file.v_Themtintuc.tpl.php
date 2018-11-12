<?php /* Smarty version Smarty-3.1.14, created on 2018-06-14 00:53:19
         compiled from "views\tintuc\v_Themtintuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213755600bd89805c43-23257110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f78a1c6117565018161f18f42bbe67b169a8e44' => 
    array (
      0 => 'views\\tintuc\\v_Themtintuc.tpl',
      1 => 1442894752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213755600bd89805c43-23257110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5600bd89830bd4_90779378',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600bd89830bd4_90779378')) {function content_5600bd89830bd4_90779378($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tiêu đề tin</label>
            <input class="text-input small-input" type="text" id="tieu_de" name="tieu_de" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <input class="text-input medium-input datepicker" type="text" id="tom_tat" name="tom_tat" />
          <p>
            <label>Nội dung chi tiết</label>
            <!--input class="text-input large-input" type="text" id="chi_tiet" name="chi_tiet" /-->
            <textarea name="chi_tiet" id="chi_tiet"  class="ckeditor" ></textarea>
            
          </p>
          <p>
            <label>Hình tin</label>
            <input type="file" name="f_hinh" />
          <p>
            <label>Tác giả</label>
            <input class="text-input small-input" type="text" id="tac_gia" name="tac_gia" />
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input" type="text" id="ngay_dang" name="ngay_dang" />
          </p>
          <p>
            <label>Ngày đăng gởi</label>
            <input class="text-input small-input" type="text" id="ngay_gui" name="ngay_gui" />
          </p>
          <p>
            <label>Số lần xem</label>
            <input class="text-input small-input" type="text" id="so_luot_xem" name="so_luot_xem" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return kiem_tra_tin_tuc();" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>