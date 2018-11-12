<?php
/* Smarty version 3.1.30, created on 2018-06-10 07:23:01
  from "C:\wamp64\www\web06062018_3PM\smarty\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b1cd1d5e49a71_04200377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc7d7ccda3865118299f0e7095bf7d5e41158bfa' => 
    array (
      0 => 'C:\\wamp64\\www\\web06062018_3PM\\smarty\\templates\\footer.tpl',
      1 => 1528594291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b1cd1d5e49a71_04200377 (Smarty_Internal_Template $_smarty_tpl) {
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
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="gioi_thieu.php">Giới thiệu</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="lien_he.php">Liên hệ</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Danh mục</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="pc_laptop.php">PC & Laptop</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="linh_kien_pc.php">Linh kiện PC</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="phu_kien.php">Phụ kiện</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.680665160691!2d106.66450171457186!3d10.759075692333308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee53b2415b7%3A0xe0c7e7adc25afe37!2zTOG6p3UgMiwsIDEzN0UgTmd1eeG7hW4gQ2jDrSBUaGFuaCwgcGjGsOG7nW5nIDksIERpc3RyaWN0IDUsIEhvIENoaSBNaW5oIENpdHksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1527579655172" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
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
									},2500);
							}
						});
	
<?php echo '</script'; ?>
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
