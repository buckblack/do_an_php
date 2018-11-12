<?php /* Smarty version Smarty-3.1.14, created on 2018-06-22 04:37:00
         compiled from "views\user\v_them_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235455b2c772f7f2f62-85299877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2791f8b9700e94bf3a3d9eca5e3d00099c71996b' => 
    array (
      0 => 'views\\user\\v_them_user.tpl',
      1 => 1529642217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235455b2c772f7f2f62-85299877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2c772f81ff92_73513037',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c772f81ff92_73513037')) {function content_5b2c772f81ff92_73513037($_smarty_tpl) {?><div class="content-box-header">
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
            <label>Họ tên</label>
            <input class="text-input small-input" type="text" id="ho_ten" name="ho_ten" value="" />
          </p>
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input" type="text" id="ten_dang_nhap" name="ten_dang_nhap" value="" />
          </p>
          <p>
            <label>Loại user</label>
            <select class="text-input small-input" type="text" name="loai_user" />
            <option value="1">admin</option>
            <option value="2">Nhân viên</option>
            </select>
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input" type="text" id="email" name="email" value="" />
          </p>
          <p>
            <label>Mật khẩu</label>
            <input class="text-input small-input" type="password" id="mat_khau" name="mat_khau" value="" />
          </p>
          <p>
            <label>Nhập lại mật khẩu</label>
            <input class="text-input small-input" type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" value="" />
          </p>
          
            <input class="button" type="submit" value="Xác nhận" name="btn_them" onclick="return kiem_tra_them_user()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='themuser.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<?php }} ?>