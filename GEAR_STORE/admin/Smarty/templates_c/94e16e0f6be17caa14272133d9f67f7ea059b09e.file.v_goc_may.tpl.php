<?php /* Smarty version Smarty-3.1.14, created on 2018-06-22 05:32:37
         compiled from "views\goc_may\v_goc_may.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193085b2c89f5134486-15284015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94e16e0f6be17caa14272133d9f67f7ea059b09e' => 
    array (
      0 => 'views\\goc_may\\v_goc_may.tpl',
      1 => 1529645536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193085b2c89f5134486-15284015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2c89f5166b39_75744960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c89f5166b39_75744960')) {function content_5b2c89f5166b39_75744960($_smarty_tpl) {?><div class="content-box-header">
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
            <label>Hình góc máy</label>
            <input type="file" name="f_hinh" />
          <p>
            <input class="button" type="submit" value="Thêm" name="btn_them" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>