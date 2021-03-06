<!-- breadcrumbs -->


{include file="thanh_trang_thai.tpl"} 
<!-- //breadcrumbs --> 
<!-- checkout -->

<div class="checkout"> {if isset($danh_sach_san_pham)}
  <div class="container">
    <div class="checkout-right">
      <table class="timetable_sub">
        <caption style="text-align:right; font-weight:bold">
        <a href="#" onclick="xoa_gio_hang()">XOÁ GIỎ HÀNG</a>
        </caption>
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
        {$dem=0}
        {foreach $danh_sach_san_pham as $san_pham}
        {$dem=$dem+1}
        <tr class="rem{$dem}">
          <td class="invert">{$dem}</td>
          <td class="invert-image"><a href="san-pham={$san_pham->ma_san_pham}-{thu_vien::bo_dau($san_pham->ten_san_pham)}"><img style="width:70px" src="public/images/{$san_pham->thu_muc}/{$san_pham->hinh}" alt=" " class="img-responsive" /></a></td>
          <td class="invert"><div class="quantity">
              <div class="quantity-select">
                <div class="entry value-minus" id="so_luong_{$san_pham->ma_san_pham}_1" ma_san_pham="{$san_pham->ma_san_pham}" don_gia="{$san_pham->don_gia}">&nbsp;</div>
                <div class="entry value" id="so_sp{$san_pham->ma_san_pham}">{$smarty.session.gio_hang.{$san_pham->ma_san_pham}}</div>
                <div class="entry value-plus active" id="so_luong_{$san_pham->ma_san_pham}_2" ma_san_pham="{$san_pham->ma_san_pham}" don_gia="{$san_pham->don_gia}">&nbsp;</div>
              </div>
              <script>
                                $("#so_luong_{$san_pham->ma_san_pham}_2").click(function(){
									var $key=$(this).attr("ma_san_pham")
									var $don_gia=$(this).attr("don_gia")
									var $so_luong=$("#so_sp{$san_pham->ma_san_pham}").text()
									
										var form_data = {
											"ma_san_pham":$key,
											"so_luong_cong":$so_luong,
											"don_gia":$don_gia
											};	
											
										$.ajax(
										{
											url: "mua_hang.php", 
											data:form_data,
											type:"POST",
											success: function(data)
											{
												$("#tinh_tong_tien").html(data).text()
											}
										});
                                	})
									
								$("#so_luong_{$san_pham->ma_san_pham}_1").click(function(){
									var $key=$(this).attr("ma_san_pham")
									var $don_gia=$(this).attr("don_gia")
									var $so_luong=$("#so_sp{$san_pham->ma_san_pham}").text()
										var form_data = {
											"ma_san_pham":$key,
											"so_luong_tru":$so_luong,
											"don_gia":$don_gia
											};	
											
										$.ajax(
										{
											url: "mua_hang.php", 
											data:form_data,
											type:"POST",
											success: function(data)
											{
												$("#tinh_tong_tien").html(data).text()
											}
										});
                                	})
                                </script> 
            </div></td>
          <td class="invert">{$san_pham->ten_san_pham}</td>
          <td class="invert">{number_format($san_pham->don_gia)} VNĐ</td>
          <td class="invert"><div class="rem">
              <div class="close1" id="close{$dem}" ma_san_pham="{$san_pham->ma_san_pham}" don_gia="{$san_pham->don_gia}"></div>
            </div>
            <script>$(document).ready(function(c) {
								$('#close{$dem}').on('click', function(c){
									if(confirm('Bạn có chắc muốn xoá'))
									{
										var $key=$(this).attr("ma_san_pham");
										var $don_gia=$(this).attr("don_gia");
										var form_data = {
											"ma_san_pham":$key,
											"don_gia":$don_gia
											};	
											
										$.ajax(
										{
											url: "xoa_hang.php", 
											data:form_data,
											type:"POST",
											success: function(data)
											{
												$("#tinh_tong_tien").html(data).text()
											}
										});
										
										$.ajax(
										{
											url: "cap_nhat_gio_hang.php", 
											success: function(data)
													{
														$("#so_san_pham").html(data)
													}
											
										});
										
										$('.rem{$dem}').fadeOut('slow', function(c){
											$('.rem{$dem}').remove();
										});
									}
									
										});	
									
									  
								});
						   </script></td>
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
    <div class="checkout-left">
      <div class="checkout-left-basket">
        <h4><a href="xac_nhan_thanh_toan" style="color:#FFF">tiến hành Thanh toán</a></h4>
      </div>
      <div class="checkout-right-basket"> <a href="."><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Tiếp tục mua sắm</a> </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  {else}
  <p align="center" style="color:#F00; font-size:24px; font-weight:bold">Chưa có sản phẩm nào trong giỏ</p>
  {/if} </div>

<!-- //checkout -->