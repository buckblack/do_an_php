<?php /* Smarty version Smarty-3.1.14, created on 2018-06-23 10:17:24
         compiled from "views\hoa_don\v_tim_hoa_don.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37545b2e1ddbd38557-83290206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918673dede052ee181087b6eb4faefcdb47b00e6' => 
    array (
      0 => 'views\\hoa_don\\v_tim_hoa_don.tpl',
      1 => 1529749012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37545b2e1ddbd38557-83290206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5b2e1ddbd59583_27224431',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2e1ddbd59583_27224431')) {function content_5b2e1ddbd59583_27224431($_smarty_tpl) {?><div class="content-box-header">
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
          <input class="text-input small-input" type="text" id="tim_so_hoa_don" name="so_hoa_don" placeholder="Nhập số hoá đơn hoặc tên khách hàng" value="" required="required" />
          
        </p>
      </fieldset>
    </form>
    
      <script>
      $("#tim_so_hoa_don").on('keyup',function(){	
	  
	  		var $tu_khoa=$(this).val();
	  		var form_data = {
						"tu_khoa":$tu_khoa,
						}	  
		  $.ajax(
			{
				
				url: "XL_tim_hoa_don.php", 
				data:form_data,
				type:"POST",
				success: function(data)
						{
							$("#ds_tim_kiem_hoa_don").html(data)
						}
									
			})
								
			
		  })
      
      </script>
      <div id="ds_tim_kiem_hoa_don">
      
      </div>

  </div>
</div>
<?php }} ?>