<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 09:16:37
         compiled from "views\loai_san_pham\v_loai_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73875b2ca178a75463-70167662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e132ed3c4e4e21fa85fb9484b96a3baed0c9ad' => 
    array (
      0 => 'views\\loai_san_pham\\v_loai_san_pham.tpl',
      1 => 1529745388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73875b2ca178a75463-70167662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2ca178ad2a94_59949618',
  'variables' => 
  array (
    'tieude' => 0,
    'danh_sach_loai_san_pham' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ca178ad2a94_59949618')) {function content_5b2ca178ad2a94_59949618($_smarty_tpl) {?><div class="content-box-header">
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
          <th>Mã loại</th>
          <th>Tên loai</th>
          <th>Thư mục</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="4">
            <div class="pagination">  </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_sach_loai_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->thu_muc;?>
</td>

          <td><!-- Icons --> 
            <a href="sua_loai_san_pham.php?ma_loai_san_pham=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>