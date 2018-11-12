<?php /* Smarty version Smarty-3.1.14, created on 2018-06-22 05:20:15
         compiled from "views\user\v_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196995b2c812c58aec6-35293597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973eb21da40656c12bb046435d90b5e37081091a' => 
    array (
      0 => 'views\\user\\v_user.tpl',
      1 => 1529644813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196995b2c812c58aec6-35293597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2c812c5c0624_07905493',
  'variables' => 
  array (
    'tieude' => 0,
    'danh_sach_user' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c812c5c0624_07905493')) {function content_5b2c812c5c0624_07905493($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th>Họ tên</th>
          <th>Tên đăng nhập</th>
          <th>Loại tài khoản</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_sach_user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->ho_ten;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->ma_loai_nguoi_dung;?>
</td>
          <td><!-- Icons --> 
            <a href="javascript:xoa_user('<?php echo $_smarty_tpl->tpl_vars['user']->value->ten_dang_nhap;?>
')" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>