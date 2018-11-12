<?php /* Smarty version Smarty-3.1.14, created on 2018-06-22 04:39:35
         compiled from "views\user\v_doi_mat_khau.tpl" */ ?>
<?php /*%%SmartyHeaderCode:264135b2c5af23157a3-95079652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f685ad5869e83f2e550b079876bbd2ebef0c4814' => 
    array (
      0 => 'views\\user\\v_doi_mat_khau.tpl',
      1 => 1529640548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264135b2c5af23157a3-95079652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2c5af2334bf6_72397091',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c5af2334bf6_72397091')) {function content_5b2c5af2334bf6_72397091($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post">
        <fieldset>
        
          <p>
            <label>Mật khẩu hiện tại</label>
            <input class="text-input small-input" type="password" id="mat_khau_hien_tai" name="mat_khau_hien_tai" value="" />
          </p>
          <p>
            <label>Mật khẩu mới</label>
            <input class="text-input small-input" type="password" id="mat_khau_moi" name="mat_khau_moi" value="" />
          </p>
          <p>
            <label>Nhập lại mật khẩu mới</label>
            <input class="text-input small-input" type="password" id="nhap_lai_mat_khau_moi" name="nhap_lai_mat_khau_moi" value="" />
          </p>
            <input class="button" type="submit" value="Xác nhận" name="btn_xac_nhan" onclick="return kiem_tra_user()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>