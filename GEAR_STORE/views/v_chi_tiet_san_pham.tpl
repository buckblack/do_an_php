<!-- breadcrumbs -->
	{include file="thanh_trang_thai.tpl"}
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="public/images/{$san_pham->thu_muc}/{$san_pham->hinh}" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2>{$san_pham->ten_san_pham}</h2>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Mô tả :</h4>
						<p>{$san_pham->mo_ta_chi_tiet}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">{number_format($san_pham->don_gia)} VNĐ</h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" id="">
									<input type="hidden" name="currency_code" value="VND">											
									<input type="button" id="{$san_pham->ma_san_pham}" don_gia="{$san_pham->don_gia}" value="thêm vào giỏ" class="button" >
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Sản phẩm cùng loại</h3>
				<div class="agile_top_brands_grids">
                {foreach $san_pham_cung_loai as $san_pham}
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="san-pham={$san_pham->ma_san_pham}-{thu_vien::bo_dau($san_pham->ten_san_pham)}"><img title=" " height="150px" width="200px" alt=" " src="public/images/{$san_pham->thu_muc}/{$san_pham->hinh}"></a>		
												<div style="height:80px"><p>{$san_pham->ten_san_pham}</p></div>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4>{number_format($san_pham->don_gia)} VNĐ</h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														
														<input type="hidden" id="don_gia({$san_pham->don_gia})">
														<input type="hidden" name="currency_code" value="VND">											
														<input type="button" id="{$san_pham->ma_san_pham}" don_gia="{$san_pham->don_gia}" value="thêm vào giỏ" class="button" >
													</fieldset>
												</form>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
					
                {/foreach}
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
    
<!-- //new -->
<div class="products">
		<div class="container">
			
            <h3>Bình luận:</h3>
            <form  method="post">
			<textarea name="binh_luan" id="binh_luan" class="ckeditor"></textarea>
            <script>
			CKEDITOR.replace( 'binh_luan', { customConfig : 'config_binh_luan.js' } );
			</script>
            <div align="left" class="login-form-grids">
				<h5>Thông tin cá nhân</h5>
					<input type="text" name="ten_khach_hang"  value="{if isset($smarty.session.khach_hang_ho_ten)}{$smarty.session.khach_hang_ho_ten}{/if}" id="bl_ten_kh" placeholder="Họ tên..." required >
					<input style="margin-bottom:15px" type="email" value="{if isset($smarty.session.khach_hang_email)}{$smarty.session.khach_hang_email}{/if}" id="bl_email" name="email" placeholder="Địa chỉ Email" required >
					<input type="text" name="dien_thoai" value="{if isset($smarty.session.khach_hang_dien_thoai)}{$smarty.session.khach_hang_dien_thoai}{/if}" id="bl_dien_thoai" placeholder="Nhập số điện thoại" required >
					<input type="submit" name="btn_binh_luan" onclick="return kiem_tra_binh_luan()" value="Gửi bình luận">

			</div>
            </form>
            
            <div >
            {if ($binh_luan|@count)>0}
			<table style="margin-top:50px" width="100%">
            	{foreach $binh_luan as $bl}
            	<tr style="border:#000 solid 1px;">
                	<td width="3%">&bull;</td>
                	<td width="17%">{$bl->nguoi_gui}:&nbsp;&nbsp;</td>
                    <td width="18%">{$bl->ngay_dang}:&nbsp;&nbsp;</td>
                    <td width="62%">{$bl->noi_dung}</td>
                </tr>
                <tr><td colspan="3">&nbsp;</td></tr>
                {/foreach}
            </table></div>
			{/if}
			</div>
			
		</div>
        </div>