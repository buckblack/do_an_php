<?php /* Smarty version Smarty-3.1.14, created on 2018-06-22 01:42:18
         compiled from "views\san_pham\v_sanpham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42665b224076934963-48262701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d0311bcfc27a216e4b4aae1a775431837cb9c4' => 
    array (
      0 => 'views\\san_pham\\v_sanpham.tpl',
      1 => 1529631737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42665b224076934963-48262701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b224076991312_71897268',
  'variables' => 
  array (
    'tieude' => 0,
    'thanh_phan_trang' => 0,
    'danh_sach_san_pham' => 0,
    'san_pham' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b224076991312_71897268')) {function content_5b224076991312_71897268($_smarty_tpl) {?><div class="content-box-header">
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
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Loại sản phẩm</th>
          <th>Mô tả</th>
          <th>Đơn giá</th>
          <th>hình</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> <?php echo $_smarty_tpl->tpl_vars['thanh_phan_trang']->value;?>
 </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['san_pham'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['san_pham']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_sach_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->key => $_smarty_tpl->tpl_vars['san_pham']->value){
$_smarty_tpl->tpl_vars['san_pham']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_loai;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->mo_ta_chi_tiet;?>
</td>
          <th><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
</th>
          <th><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
</th>
          <td><!-- Icons --> 
            <a href="sua_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:xoa_san_pham(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
)" title="Delete"> 
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