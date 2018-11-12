<?php
/* Smarty version 3.1.30, created on 2018-06-24 08:51:03
  from "E:\wamp64\www\web06062018_3PM\smarty\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b2f5b774c1ea4_72612745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554207c1d48fe5e88054abd82c4e1324357d0615' => 
    array (
      0 => 'E:\\wamp64\\www\\web06062018_3PM\\smarty\\templates\\footer.tpl',
      1 => 1529830261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2f5b774c1ea4_72612745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Liên hệ</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Thông tin</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="gioi_thieu">Giới thiệu</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="lien_he">Liên hệ</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Danh mục</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="PC-laptop">PC & Laptop</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="linh-kien-PC">Linh kiện PC</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="phu_kien.php">Phụ kiện</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid" >
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.680665160691!2d106.66450171457186!3d10.759075692333308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee53b2415b7%3A0xe0c7e7adc25afe37!2zTOG6p3UgMiwsIDEzN0UgTmd1eeG7hW4gQ2jDrSBUaGFuaCwgcGjGsOG7nW5nIDksIERpc3RyaWN0IDUsIEhvIENoaSBNaW5oIENpdHksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1527579655172" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			<div class="container">
				<p>© 2017 Super Market. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="public/images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- thêm giỏ hàng -->
<?php echo '<script'; ?>
>
      $(".button").click(function(){
							if($(this).val()=="thêm vào giỏ")
							{
								$(this).css({"background-color":"#9C3"})
								$(this).val("✔ đã thêm")
								$this=$(this)
								setTimeout(function(){
									$this.val("thêm vào giỏ")
									$this.css({"background-color":"#3399cc"});
									},1000)
									
								var $key=$(this).attr("id");
								var $don_gia=$(this).attr("don_gia");
								var form_data = {
									"ma_san_pham":$key,
									"don_gia":$don_gia
									}
								$.ajax(
								{
									url: "mua_hang.php", 
									data:form_data,
									type:"POST",
									
								})
								
								$.ajax(
								{
									url: "cap_nhat_gio_hang.php", 
									success: function(data)
											{
												$("#so_san_pham").html(data)
											}
									
								})	
								
								
	
							}
						});
			
			
		function xoa_gio_hang()
		{
			if(confirm("Xác nhận xoá giỏ hàng"))
			{
				location='xoa_hang.php';
			}
		}	
		
		function kiem_tra_thong_tin()
		{
			var ten_khach_hang=document.getElementById("ten_khach_hang")
			var email=document.getElementById("email")
			var dia_chi=document.getElementById("dia_chi")
			var dien_thoai=document.getElementById("dien_thoai")
			if(ten_khach_hang.value.trim()=="")
			{
				alert("Vui lòng nhập tên khách hàng")
				ten_khach_hang.focus()
				return false
			}
			if(email.value.trim()=="")
			{
				alert("Vui lòng nhập email")
				email.focus()
				return false
			}
			if(dia_chi.value.trim()=="")
			{
				alert("Vui lòng nhập địa chỉ")
				dia_chi.focus()
				return false
			}
			if(dien_thoai.value.trim()=="")
			{
				alert("Vui lòng nhập số điện thoại")
				dien_thoai.focus()
				return false
			}
			
			return true
		}
		
		
		function kiem_tra_tim_kiem()
		{
			var tim_kiem=document.getElementById("keyword")
			if(tim_kiem.value.trim()=="")
			{
				alert("Vui lòng nhập từ khoá tìm kiếm")
				ten_khach_hang.focus()
				return false
			}
			
			return true
		}
		
		function kiem_tra_binh_luan()
		{
			var ten_kh=document.getElementById("bl_ten_kh")
			var email=document.getElementById("bl_email")
			var dien_thoai=document.getElementById("bl_dien_thoai")
			
			if(ten_kh.value.trim()=="")
			{
				alert("Vui lòng nhập họ tên")
				ten_kh.focus()
				return false
			}
			
			if(dien_thoai.value.trim()=="")
			{
				alert("Vui lòng nhập số diện thoại")
				dien_thoai.focus()
				return false
			}
			if(email.value.trim()=="")
			{
				alert("Vui lòng nhập email")
				email.focus()
				return false
			}
			if(isNaN(dien_thoai.value) || (dien_thoai.value.length)>11)
			{
				alert("Số điện thoại không hợp lệ")
				dien_thoai.focus()
				return false
			}

			return true
		}
		
		function chi_tiet_san_pham(ma_san_pham,ten_san_pham)
		{
			window.location='ten_san_pham.php?ma_san_pham='+ma_san_pham+'&ten_san_pham='+ten_san_pham
		}
		
		
	
<?php echo '</script'; ?>
>
                 <?php echo '<script'; ?>
 type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'b535038f-ff99-44bd-b14b-5ad388509e17', f: true }); done = true; } }; })();<?php echo '</script'; ?>
>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	<?php echo '</script'; ?>
>
<!-- //here ends scrolling icon -->
<?php echo '<script'; ?>
 src="public/js/minicart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	// Mini Cart
	paypal.minicart.render({
		action: '#'

	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
<?php echo '</script'; ?>
>

<!-- main slider-banner -->
<?php echo '<script'; ?>
 src="public/js/skdslider.min.js"><?php echo '</script'; ?>
>
<link href="public/css/skdslider.css" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
<?php echo '</script'; ?>
>
<!-- //main slider-banner --> 
</body>
</html><?php }
}
