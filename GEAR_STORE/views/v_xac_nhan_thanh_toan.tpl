<!-- breadcrumbs -->


{include file="thanh_trang_thai.tpl"} 
<!-- //breadcrumbs --> 
<!-- checkout -->

<div class="checkout"> {if isset($danh_sach_san_pham)}
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
          </tr>
        </thead>
        {$dem=0}
        {foreach $danh_sach_san_pham as $san_pham}
        {$dem=$dem+1}
        <tr class="rem{$dem}">
          <td class="invert">{$dem}</td>
          <td class="invert-image"><a href="san-pham={$san_pham->ma_san_pham}-{thu_vien::bo_dau($san_pham->ten_san_pham)}"><img style="width:70px" src="public/images/{$san_pham->thu_muc}/{$san_pham->hinh}" alt=" " class="img-responsive" /></a></td>
          <td class="invert"><div class="quantity">
              <div class="quantity-select">
                <div class="entry value" id="so_sp{$san_pham->ma_san_pham}">{$smarty.session.gio_hang.{$san_pham->ma_san_pham}}</div>
              </div>
              
            </div></td>
          <td class="invert">{$san_pham->ten_san_pham}</td>
          <td class="invert">{number_format($san_pham->don_gia)} VNĐ</td>
          
        </tr>
        {/foreach}
        <tr class="rem3">
          <td style="font-size:20px; font-weight:bold" colspan="6" class="invert">Tổng tiền: <span id="tinh_tong_tien">{if isset($smarty.session.tong_tien)}{number_format($smarty.session.tong_tien)}{/if}</span> VNĐ</td>
        </tr>
        <!--quantity--> 
        <script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script> 
        <!--quantity-->
      </table>
    </div>
    
    
    <div class="register" style="margin-bottom:-50px; margin-top:-50px">
		<div class="container">
			<h2>Thông tin nhận hàng</h2>
			<div class="login-form-grids">
					<form method="post" action="">
                    <input style="margin-bottom:15px" type="text" value="{if isset($smarty.session.khach_hang_ho_ten)}{$smarty.session.khach_hang_ho_ten}{/if}" id="ten_khach_hang" placeholder="Họ tên" required name="ten_khach_hang" />
					<input style="margin-bottom:15px" type="email" value="{if isset($smarty.session.khach_hang_email)}{$smarty.session.khach_hang_email}{/if}" placeholder="Email" name="email" id="email" required >
					<input style="margin-bottom:15px" type="text" value="{if isset($smarty.session.khach_hang_dia_chi)}{$smarty.session.khach_hang_dia_chi}{/if}" placeholder="Địa chỉ nhận hàng" name="dia_chi" id="dia_chi" required >
					<input type="text" placeholder="Số điện thoại" value="{if isset($smarty.session.khach_hang_dien_thoai)}{$smarty.session.khach_hang_dien_thoai}{/if}" name="dien_thoai" id="dien_thoai" required >
                    <!--<input type="radio" name="hinh_thuc_thanh_toan" value="tien_mat" checked="checked"> Tiền mặt
                    <input type="radio" name="hinh_thuc_thanh_toan" value="Thẻ tín dụng"> Thẻ tín dụng
                    <input type="radio" name="hinh_thuc_thanh_toan" value="Chuyển khoản"> Chuyển khoản
                     -->
				
			</div>
			
		</div>
	</div>
        <div class="snipcart-details top_brand_home_details" >
        
		<input type="submit" value="Xác nhận" name="xac_nhan" class="button" onclick="" style="width:200px; font-size:24px; font-weight:bold" />
        </form>
        
		</div>

    </div>
  </div>
  {else}
  <p align="center" style="color:#F00; font-size:24px; font-weight:bold">Chưa có sản phẩm nào trong giỏ</p>
  {/if} </div>

<!-- //checkout -->