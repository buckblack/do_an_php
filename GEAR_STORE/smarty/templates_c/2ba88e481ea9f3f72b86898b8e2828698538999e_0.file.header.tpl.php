<?php
/* Smarty version 3.1.30, created on 2018-06-10 07:39:34
  from "C:\wamp64\www\web06062018_3PM\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1cd5b644f424_59046331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ba88e481ea9f3f72b86898b8e2828698538999e' => 
    array (
      0 => 'C:\\wamp64\\www\\web06062018_3PM\\smarty\\templates\\header.tpl',
      1 => 1528616367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1cd5b644f424_59046331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<a href="."><img src="public/images/logo/logo.png" height="38px"  /></a>
			</div>
            <div style="margin-right:-50px;" class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Tìm sản phẩm..." required>
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				
			</form>
		</div>
			<div style="margin-right:-300px" class="agile-login">
				<ul>
					<li><a href="dang_ky.php"> Đăng ký </a></li>
					<li><a href="dang_nhap.php"> Đăng nhập </a></li>			
				</ul>
			</div>
            
			<div class="product_list_header" style="padding-right: 10px" onclick="window.location='gio_hang.php'">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="button" name="submit" value="" ><i class="fa fa-cart-arrow-down" aria-hidden="true"><?php if (isset($_SESSION['gio_hang'])) {?><sup style="font-size:12px">(<b style="color:#F00"><?php echo count($_SESSION['gio_hang']);?>
</b>)</sup><?php }?></i></button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

<!-- //header --><?php }
}
