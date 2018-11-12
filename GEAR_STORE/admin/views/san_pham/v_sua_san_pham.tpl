<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
         
            <input hidden="" class="text-input small-input" type="text" id="ma_san_pham" name="ma_san_pham" value="{$san_pham->ma_san_pham}" />
        
          <p>
            <label>Tên sản phẩm</label>
            <input class="text-input small-input" type="text" id="ten_san_pham" name="ten_san_pham" value="{$san_pham->ten_san_pham}" />
          </p>
          <p>
            <label>Loại sản phẩm</label>
            <select class="text-input small-input" type="text" id="loai_san_pham" name="loai_san_pham" />
            {foreach $danh_sach_loai_san_pham as $loai_san_pham}
            <option value="{$loai_san_pham->ma_loai}">{$loai_san_pham->ten_loai}</option>
            {/foreach}
            </select>
          </p>
          
            <label>Nội dung</label>
            <textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet"  class="ckeditor" >{$san_pham->mo_ta_chi_tiet}</textarea>
            <script>
			CKEDITOR.replace( 'mo_ta_chi_tiet', { customConfig : 'config_lien_he.js' } );
			</script>
            
          </p>
          <p>
            <label>Đơn giá</label>
            <input class="text-input small-input" type="text" id="don_gia" name="don_gia" value="{$san_pham->don_gia}" />
		  </p>
          <p>
            <label>Hình</label>
            <input type="file" name="f_hinh" />
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return kiem_tra_san_pham()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
