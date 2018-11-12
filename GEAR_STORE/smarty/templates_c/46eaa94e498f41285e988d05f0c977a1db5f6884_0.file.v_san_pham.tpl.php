<?php
/* Smarty version 3.1.30, created on 2018-06-10 07:24:29
  from "C:\wamp64\www\web06062018_3PM\views\v_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1cd22de67176_24389596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46eaa94e498f41285e988d05f0c977a1db5f6884' => 
    array (
      0 => 'C:\\wamp64\\www\\web06062018_3PM\\views\\v_san_pham.tpl',
      1 => 1528594236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thanh_trang_thai.tpl' => 1,
  ),
),false)) {
function content_5b1cd22de67176_24389596 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- breadcrumbs -->
	<?php $_smarty_tpl->_subTemplateRender("file:thanh_trang_thai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-md-12 products-right">
				<div class="products-right-grid">
					<div class="products-right-grids">
						<div class="sorting">
							<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Default sorting</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by popularity</option> 
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by average rating</option>					
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Sort by price</option>								
							</select>
						</div>
						<div class="sorting-left">
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 9</option>
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 18</option> 
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>Item on page 32</option>					
								<option value="null"><i class="fa fa-arrow-right" aria-hidden="true"></i>All</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
              
				<div class="agile_top_brands_grids">
					<div class="col-md-3 top_brand_left" style="padding-bottom:30px">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
"><img title=" " width="200px" height="150px" alt=" " src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
"></a>		
												<div style="height:80px"><p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</p></div>
												<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" id="item_name" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
">
														<input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
">
														<input type="hidden" name="currency_code" value="VND">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="button" name="submit" value="thêm vào giỏ" class="button" >
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
								
							</div>
						</div>
					</div>
					
                    
                 	
                 
                 
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <div class="clearfix"> </div>
            
            

					<nav class="numbering">
					<ul class="pagination paging">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- beverages ---><?php }
}
