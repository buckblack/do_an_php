<?php
/* Smarty version 3.1.30, created on 2018-06-10 07:24:52
  from "C:\wamp64\www\web06062018_3PM\views\v_gio_hang.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1cd2442e34d7_47523739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26036c78565bc3f46e7e257b16edf055e5c307d4' => 
    array (
      0 => 'C:\\wamp64\\www\\web06062018_3PM\\views\\v_gio_hang.tpl',
      1 => 1528594193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b1cd2442e34d7_47523739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>STT</th>	
							<th>Hình ảnh</th>
							<th>số lượng</th>
							<th>Tên sản phẩm</th>
						
							<th>Giá</th>
							<th>Xoá</th>
						</tr>
					</thead>
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="../view/single.html"><img src="public/images/1.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Tata Salt</td>
						
						<td class="invert">$290.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<?php echo '<script'; ?>
>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});	  
								});
						   <?php echo '</script'; ?>
>
						</td>
					</tr>
					<tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="../view/single.html"><img src="public/images/2.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Fortune oil</td>
					
						<td class="invert">$250.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<?php echo '<script'; ?>
>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   <?php echo '</script'; ?>
>
						</td>
					</tr>
                    <tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="../view/single.html"><img src="public/images/2.png" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Fortune oil</td>
					
						<td class="invert">$250.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<?php echo '<script'; ?>
>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});	  
								});
						   <?php echo '</script'; ?>
>
						</td>
					</tr>
					<tr class="rem3">
						
						
						<td style="font-size:20px; font-weight:bold" colspan="6" class="invert">Tổng tiền: 150000 VNĐ</td>
						
					</tr>
								<!--quantity-->
									<?php echo '<script'; ?>
>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									<?php echo '</script'; ?>
>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>tiến hành Thanh toán</h4>
					
				</div>
				<div class="checkout-right-basket">
					<a href="."><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua sắm</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout --><?php }
}
