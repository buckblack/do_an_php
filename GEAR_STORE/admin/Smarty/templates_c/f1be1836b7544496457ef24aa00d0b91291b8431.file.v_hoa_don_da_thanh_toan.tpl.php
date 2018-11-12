<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 11:11:32
         compiled from "views\hoa_don\v_hoa_don_da_thanh_toan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321495b2e18ebdc1ca6-35428467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1be1836b7544496457ef24aa00d0b91291b8431' => 
    array (
      0 => 'views\\hoa_don\\v_hoa_don_da_thanh_toan.tpl',
      1 => 1529752242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321495b2e18ebdc1ca6-35428467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2e18ebe00863_42733114',
  'variables' => 
  array (
    'tieude' => 0,
    'thanh_phan_trang' => 0,
    'danh_sach_hoa_don' => 0,
    'hoa_don' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2e18ebe00863_42733114')) {function content_5b2e18ebe00863_42733114($_smarty_tpl) {?><div class="content-box-header">
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
          <th>Mã hoá đơn</th>
          <th>Mã khách hàng</th>
          <th>Tên khách hàng</th>
          <th>Ngày đặt</th>
          <th>Trị giá</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="5">
            <div class="pagination"> <?php echo $_smarty_tpl->tpl_vars['thanh_phan_trang']->value;?>
 </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['hoa_don'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hoa_don']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_sach_hoa_don']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hoa_don']->key => $_smarty_tpl->tpl_vars['hoa_don']->value){
$_smarty_tpl->tpl_vars['hoa_don']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->so_hoa_don;?>
&nbsp;&nbsp;&nbsp;<a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->so_hoa_don;?>
">xem</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ma_khach_hang;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ten_khach_hang;?>
</td>
          
          <th><?php echo $_smarty_tpl->tpl_vars['hoa_don']->value->ngay_hd;?>
</th>
          <th><?php echo number_format($_smarty_tpl->tpl_vars['hoa_don']->value->tri_gia);?>
</th>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>