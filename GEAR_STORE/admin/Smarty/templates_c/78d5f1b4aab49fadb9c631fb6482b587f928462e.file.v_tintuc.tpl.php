<?php /* Smarty version Smarty-3.1.14, created on 2018-06-14 00:53:58
         compiled from "views\tintuc\v_tintuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284365600bd87cf31c0-21163977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d5f1b4aab49fadb9c631fb6482b587f928462e' => 
    array (
      0 => 'views\\tintuc\\v_tintuc.tpl',
      1 => 1442891230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284365600bd87cf31c0-21163977',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5600bd87d16453_04148435',
  'variables' => 
  array (
    'tieude' => 0,
    'tin_tuc' => 0,
    'tin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600bd87d16453_04148435')) {function content_5600bd87d16453_04148435($_smarty_tpl) {?><div class="content-box-header">
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
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã tin</th>
          <th>Tiêu đề</th>
          <th>Tác giả</th>
          <th>Ngày đăng</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['tin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tin_tuc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->key => $_smarty_tpl->tpl_vars['tin']->value){
$_smarty_tpl->tpl_vars['tin']->_loop = true;
?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
</td>
          <td><a href="suatintuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['tin']->value->tieu_de;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['tin']->value->tac_gia;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['tin']->value->ngay_dang;?>
</td>
          <td><!-- Icons --> 
            <a href="suatintuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:xoa_tin_tuc(<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
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