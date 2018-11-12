<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 11:26:08
         compiled from "views\hoa_don\v_chi_tiet_hoa_don.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280335b2e2ae6a9fb36-67227984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90fa7c19aed25bd2b02a385faead88ef6fdc0aa' => 
    array (
      0 => 'views\\hoa_don\\v_chi_tiet_hoa_don.tpl',
      1 => 1529753166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280335b2e2ae6a9fb36-67227984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2e2ae6adabb1_40411456',
  'variables' => 
  array (
    'tieude' => 0,
    'chi_tiet_hoa_don' => 0,
    'hoa_don' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2e2ae6adabb1_40411456')) {function content_5b2e2ae6adabb1_40411456($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
  <h2 align="center">Hoá đơn: <?php echo $_GET['ma_hoa_don'];?>
</h2>
    <table>
      <thead>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
        </tr>
      </thead>
      <tbody>
      <?php if (count($_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value)>0){?>
        <?php  $_smarty_tpl->tpl_vars['hoa_don'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hoa_don']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chi_tiet_hoa_don']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->key => $_smarty_tpl->tpl_vars['hoa_don']->value){
$_smarty_tpl->tpl_vars['hoa_don']->_loop = true;
?>
        <tr>
          <th><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_san_pham;?>
</th>
          <th><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_san_pham;?>
</th>
          <th><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->so_luong;?>
</th>
          <th><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->don_gia);?>
</th>
        </tr>
        <?php } ?>
        <?php }else{ ?>
        <tr>
          <td colspan="4"><b>Không tìm thấy hoá đơn nào</b></td>
        </tr>
        <?php }?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>