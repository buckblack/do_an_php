<?php
/* Smarty version 3.1.30, created on 2018-07-26 02:24:53
  from "D:\wamp64\www\GEAR_STORE\views\v_error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5930f50d8a13_80096531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64773575e30c5ac2b6465440d1884d1e1d583528' => 
    array (
      0 => 'D:\\wamp64\\www\\GEAR_STORE\\views\\v_error.tpl',
      1 => 1529468421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b5930f50d8a13_80096531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->


<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!-- //breadcrumbs --> 
<!-- checkout -->

<div class="checkout"> 

  <p align="center" style="color:#F00; font-size:24px; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
 </div>

<!-- //checkout --><?php }
}
