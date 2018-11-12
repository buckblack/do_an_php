<?php
/* Smarty version 3.1.30, created on 2018-06-25 09:52:26
  from "E:\wamp64\www\GEAR_STORE\views\v_trang_chu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b30bb5adeaf96_85402226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00b4b9b1d9014a7f9ce67db230e4e5bee8dcc93' => 
    array (
      0 => 'E:\\wamp64\\www\\GEAR_STORE\\views\\v_trang_chu.tpl',
      1 => 1529920340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b30bb5adeaf96_85402226 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<!-- main-slider -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img class="first-slide" src="public/images/slider_trang_chu/<?php echo $_smarty_tpl->tpl_vars['danh_sach_slider_trang_chu']->value[0]->hinh;?>
" width="100%" alt="First slide">
       
        </div>
        <div class="item">
        <img class="second-slide " src="public/images/slider_trang_chu/<?php echo $_smarty_tpl->tpl_vars['danh_sach_slider_trang_chu']->value[1]->hinh;?>
" width="100%" alt="Second slide">
         
        </div>
        <div class="item">
          <img class="third-slide " src="public/images/slider_trang_chu/<?php echo $_smarty_tpl->tpl_vars['danh_sach_slider_trang_chu']->value[2]->hinh;?>
" width="100%" alt="Third slide">
          
        </div>
      </div>
    
    </div>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
    <div class="newproducts-w3agile">
		<div class="container">
			<h3>Sản phẩm mới</h3>
				<div class="agile_top_brands_grids">
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_san_pham_moi']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
					<div class="col-md-3 top_brand_left-1">
						<div style="margin-top:25px" class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="public/images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="san-pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
-<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
"><img width="150px" height="150px" title=" " alt=" " src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
"></a>		
												<div style="height:55px"><p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</p></div>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" id="don_gia(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
)">
														<input type="hidden" name="currency_code" value="VND">											
														<input style="width:100%" type="button" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" value="thêm vào giỏ" class="button" >
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
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
				</div>
		</div>
	</div>
	<div class="top-brands">
		<div class="container">
		<h2 style="margin-top:-100px; margin-bottom:-40px">Sản phẩm bán chạy</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Sản phẩm bán chạy</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Sản phẩm bán chạy trong tuần</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Những sản phẩm được nhiều người mua nhất.</h5>
								<p class="w3l-ad"></p>
							</div>
                            
							<div class="agile_top_brands_grids" style="margin-top:-10px">
								
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_ban_chay']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
                                
                                <div class="col-md-4 top_brand_left" style="margin-top:28px">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="public/images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="san-pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
-<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
"><img width="150px" height="150px" title=" " alt=" " src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" /></a>		
															<div style="height:55px"><p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</p></div>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
													<fieldset>
														<input type="hidden" id="don_gia(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
)">
														<input type="hidden" name="currency_code" value="VND">											
														<input type="button" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" value="thêm vào giỏ" class="button" >
													</fieldset>
												</form>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
                                
                                
                                
								
								
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</div>
                            
                            
							<div class="clearfix"> </div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								
								<h5 class="w3l-ad">Những sản phẩm được nhiều người mua nhất trong tuần.</h5>
							</div>
                            
							<div class="agile_top_brands_grids" style="margin-top:-10px">
                            
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_ban_chay_trong_tuan']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
                                
                                <div class="col-md-4 top_brand_left" style="margin-top:28px">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
												<img src="public/images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="san-pham=<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
-<?php echo thu_vien::bo_dau($_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham);?>
"><img width="150px" height="150px" title=" " alt=" " src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->thu_muc;?>
/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" /></a>		
															<div style="height:55px"><p><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</p></div>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4><?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
 VNĐ</h4>
														</div>
														<div class="snipcart-details top_brand_home_details">
															<form action="#" method="post">
													<fieldset>
														<input type="hidden" id="don_gia(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
)">
														<input type="hidden" name="currency_code" value="VND">											
														<input type="button" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" don_gia="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" value="thêm vào giỏ" class="button" >
													</fieldset>
												</form>
														</div>
													</div>
												</figure>
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
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->	
<!--banner-bottom-->
<div class="newproducts-w3agile">
		<div class="container">
			<h3 style="margin-bottom:50px; margin-top:-100px">Góc máy đẹp</h3>

					<div class="col-md-6 ban-bottom3">
							<div class="ban-top" style="margin-bottom:30px;width:100%; height:300px ">
								<img src="public/images/goc_may/<?php echo $_smarty_tpl->tpl_vars['danh_sach_goc_may']->value[0]->hinh;?>
" class="img-responsive" alt=""/>
								
					  		</div>
                            <div class="ban-top" style="width:100%; height:300px">
								<img src="public/images/goc_may/<?php echo $_smarty_tpl->tpl_vars['danh_sach_goc_may']->value[1]->hinh;?>
" class="img-responsive" alt=""/>
								
					  		</div>
                            
							
					  </div>
                      
                      
                      
						<div class="col-md-6 ban-bottom">
							<div class="ban-top" style="margin-bottom:30px;width:100%; height:300px">
								<img  src="public/images/goc_may/<?php echo $_smarty_tpl->tpl_vars['danh_sach_goc_may']->value[2]->hinh;?>
" class="img-responsive" alt=""/>
								
								
							</div>
                            <div class="ban-top" style="width:100%; height:300px">
								<img  src="public/images/goc_may/<?php echo $_smarty_tpl->tpl_vars['danh_sach_goc_may']->value[3]->hinh;?>
" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						
						<div class="clearfix"></div>
		</div>
	</div>
				
<!--banner-bottom-->
<!--brands-->
	<div class="brands">
		<div class="container">
		<h3>Thương hiệu</h3>
			<div class="brands-agile">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['danh_sach_logo']->value, 'logo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
?>
				<div class="col-md-2 w3layouts-brand" style="margin-top:20px;width:(100/6)%; height:60px">
					<div class="brands-w3l" style="width:100%;height:100%">
						<img style="width:100%;height:100%" src="public/images/logo/<?php echo $_smarty_tpl->tpl_vars['logo']->value->hinh;?>
" />
					</div>
				</div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
<!--//brands-->
<!-- new -->
	
<!-- //new --><?php }
}
