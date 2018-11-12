<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="#" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  
  <li>
  <a href="#" class="nav-top-item" id="san_pham"> Sản phẩm </a>
    <ul>
      <li><a href="san_pham.php" title="san_pham">Danh sách sản phẩm</a></li>
      <li><a href="them_san_pham.php" title="san_pham">Thêm sản phẩm</a></li>
      <li><a href="tim_san_pham.php" title="san_pham">Tìm sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="monan"> Loại sản phẩm </a>
    <ul>
      <li><a href="loai_san_pham.php" title="monan">Danh sách loại sản phẩm</a></li>
      <li><a href="them_loai_san_pham.php" title="monan">Thêm loại sản phẩm</a></li>
    </ul>
  </li>
  <li> 
  <a href="#" class="nav-top-item" id="loaimon"> Hoá đơn </a>
    <ul>
      <li><a href="hoa_don_da_thanh_toan.php" title="loaimon">Hoá đơn đã thanh toán</a></li>
      <li><a href="hoa_don_chua_thanh_toan.php" title="loaimon">Hoá đơn chưa thanh toán</a></li>
      <li><a href="tim_hoa_don.php" title="loaimon">Tìm hoá đơn</a></li>
    </ul>
  </li>
  
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
    {if $smarty.session.user_loai_user==1}
      <li><a href="user.php" title="user">Danh sách User</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    {/if}
      <li><a href="doi_mat_khau.php" title="user">Đổi mật khẩu</a></li>
    </ul>
  </li>
  
  <li> <a href="#" class="nav-top-item" id="user"> Góc máy đẹp </a>
    <ul>
      <li><a href="them_goc_may.php" title="user">Thêm hình góc máy</a></li>
      
    </ul>
  </li>
  
  <li> <a href="#" class="nav-top-item" id="user"> Slider trang chủ </a>
    <ul>
      <li><a href="them_slider.php" title="user">Thêm slider</a></li>
      
    </ul>
  </li>
  
  
</ul>
<!-- End #main-nav -->