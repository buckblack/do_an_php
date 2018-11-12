<div class="content-box-header">
  <h3>{$tieude}</h3>
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
