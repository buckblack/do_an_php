<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 08:58:08
         compiled from "views\san_pham\v_tim_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136165b2c9775b4c1c2-68008093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0acd8a7d9fc2e0692d67974d488963a03aefc0d6' => 
    array (
      0 => 'views\\san_pham\\v_tim_san_pham.tpl',
      1 => 1529744286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136165b2c9775b4c1c2-68008093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2c9775b8fa68_01531336',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c9775b8fa68_01531336')) {function content_5b2c9775b8fa68_01531336($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
      <fieldset>
        <p>
          <label>Nhập từ khoá</label>
          <input class="text-input small-input" type="text" id="tim_ten_san_pham" name="ten_san_pham" placeholder="Nhập tên hoặc mã sản phẩm" value="" required="required" />
          
        </p>
      </fieldset>
    </form>
    
      <script>
      $("#tim_ten_san_pham").on('keyup',function(){	
	  
	  		var $tu_khoa=$(this).val();
	  		var form_data = {
						"tu_khoa":$tu_khoa,
						}	  
		  $.ajax(
			{
				
				url: "XL_tim_sap_pham.php", 
				data:form_data,
				type:"POST",
				success: function(data)
						{
							$("#ds_tim_kiem").html(data)
						}
									
			})
								
			
		  })
      
      </script>
      <div id="ds_tim_kiem">
      
      </div>

  </div>
</div>
<?php }} ?>