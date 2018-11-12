<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 12:09:43
         compiled from "views\slider\v_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14575b2e386dcfbc54-41987099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f45f42a745b647906c8a419379c7e2b6322ca55d' => 
    array (
      0 => 'views\\slider\\v_slider.tpl',
      1 => 1529755781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14575b2e386dcfbc54-41987099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2e386dd1d342_09550019',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2e386dd1d342_09550019')) {function content_5b2e386dd1d342_09550019($_smarty_tpl) {?><div class="content-box-header">
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
            <label>Chọn hình slider trang chủ</label>
            <input type="file" name="f_hinh" />
          <p>
            <input class="button" type="submit" value="Thêm" name="btn_them" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='them_slider.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>