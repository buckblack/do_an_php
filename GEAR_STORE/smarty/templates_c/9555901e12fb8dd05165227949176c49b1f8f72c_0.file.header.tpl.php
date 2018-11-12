<?php
/* Smarty version 3.1.30, created on 2018-07-26 02:24:25
  from "D:\wamp64\www\GEAR_STORE\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5930d9c82773_93764533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9555901e12fb8dd05165227949176c49b1f8f72c' => 
    array (
      0 => 'D:\\wamp64\\www\\GEAR_STORE\\smarty\\templates\\header.tpl',
      1 => 1529894978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5930d9c82773_93764533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<a href="." style="float:left"><img src="public/images/logo/logo.png" height="38px"  /></a>
                <div class="product_list_header" style="padding-right: 10px;float:right" onclick="window.location='gio_hang'">  
					 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="button" name="submit" value="" ><i class="fa fa-cart-arrow-down" aria-hidden="true"><sup style="font-size:12px">(<b style="color:#F00" id="so_san_pham"><?php if (isset($_SESSION['gio_hang'])) {
echo count($_SESSION['gio_hang']);
} else { ?>0<?php }?></b>)</sup></i></button>
					  
			</div>
                <div style="float:right" class="agile-login">
				<ul>
                <?php if (isset($_SESSION['khach_hang_ho_ten'])) {?>
                	<li><a href="#"> Chào, <i><?php echo $_SESSION['khach_hang_ho_ten'];?>
</i> </a></li>
					<li><a href="dang_xuat.php"> Đăng xuất </a></li>
                <?php } else { ?>
					<li><a href="dang_ky"> Đăng ký </a></li>
					<li><a href="dang_nhap"> Đăng nhập </a></li>
                <?php }?>			
				</ul>
				</div>
                
			</div>
            <div  class="w3l_search">
            	
			<form action="tim_kiem" method="post">
				<input id="keyword"  name="q" type="search"  placeholder="Tìm sản phẩm..." required>
                <?php echo '<script'; ?>
>
        $(function(){
            $('#keyword').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase()
					
                    var choices = [<?php echo $_smarty_tpl->tpl_vars['str']->value;?>
]
					
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });
		})
<?php echo '</script'; ?>
>
                
				<button type="submit" class="btn btn-default search" onclick="return kiem_tra_tim_kiem()" name="btn_tim_kiem" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				
			</form>
		</div>
			
            
			
			
		</div>
	</div>
    

<!-- //header --><?php }
}
