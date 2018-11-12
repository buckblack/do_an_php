<?php
/* Smarty version 3.1.30, created on 2018-06-24 08:19:30
  from "E:\wamp64\www\web06062018_3PM\ten_san_pham.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2f5412240228_64356969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13acea402f1289eccad33a776acd9421db664fef' => 
    array (
      0 => 'E:\\wamp64\\www\\web06062018_3PM\\ten_san_pham.php',
      1 => 1529828362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2f5412240228_64356969 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>@session_start();
include_once('models/thu_vien.php');
$tv=new thu_vien();
$ten_san_pham=$_SESSION['ten_san_pham'];
$ten_san_pham=$tv->bo_dau($ten_san_pham);
echo $ten_san_pham;
$_SESSION['ten_san_pham']=$ten_san_pham;
<?php echo '?>';
}
}
