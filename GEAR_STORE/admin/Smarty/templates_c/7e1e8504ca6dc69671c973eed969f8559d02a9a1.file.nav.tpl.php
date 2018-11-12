<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 12:00:36
         compiled from "Smarty\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298005600bd87cb8832-24707734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1e8504ca6dc69671c973eed969f8559d02a9a1' => 
    array (
      0 => 'Smarty\\templates\\nav.tpl',
      1 => 1529755231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298005600bd87cb8832-24707734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5600bd87cbc6b5_49922394',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600bd87cbc6b5_49922394')) {function content_5600bd87cbc6b5_49922394($_smarty_tpl) {?><script>
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
    <?php if ($_SESSION['user_loai_user']==1){?>
      <li><a href="user.php" title="user">Danh sách User</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    <?php }?>
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
<!-- End #main-nav --><?php }} ?>