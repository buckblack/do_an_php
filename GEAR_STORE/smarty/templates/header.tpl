<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<a href="." style="float:left"><img src="public/images/logo/logo.png" height="38px"  /></a>
                <div class="product_list_header" style="padding-right: 10px;float:right" onclick="window.location='gio_hang'">  
					 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="button" name="submit" value="" ><i class="fa fa-cart-arrow-down" aria-hidden="true"><sup style="font-size:12px">(<b style="color:#F00" id="so_san_pham">{if isset($smarty.session.gio_hang)}{$smarty.session.gio_hang|@count}{else}0{/if}</b>)</sup></i></button>
					  
			</div>
                <div style="float:right" class="agile-login">
				<ul>
                {if isset($smarty.session.khach_hang_ho_ten)}
                	<li><a href="#"> Chào, <i>{$smarty.session.khach_hang_ho_ten}</i> </a></li>
					<li><a href="dang_xuat.php"> Đăng xuất </a></li>
                {else}
					<li><a href="dang_ky"> Đăng ký </a></li>
					<li><a href="dang_nhap"> Đăng nhập </a></li>
                {/if}			
				</ul>
				</div>
                
			</div>
            <div  class="w3l_search">
            	
			<form action="tim_kiem" method="post">
				<input id="keyword"  name="q" type="search"  placeholder="Tìm sản phẩm..." required>
                <script>
        $(function(){
            $('#keyword').autoComplete({
                minChars: 1,
                source: function(term, suggest){
                    term = term.toLowerCase()
					
                    var choices = [{$str}]
					
                    var suggestions = [];
                    for (i=0;i<choices.length;i++)
                        if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                    suggest(suggestions);
                }
            });
		})
</script>
                
				<button type="submit" class="btn btn-default search" onclick="return kiem_tra_tim_kiem()" name="btn_tim_kiem" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				
			</form>
		</div>
			
            
			
			
		</div>
	</div>
    

<!-- //header -->