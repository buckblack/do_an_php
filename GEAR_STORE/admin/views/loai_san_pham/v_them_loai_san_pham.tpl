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
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="them_loai_ten_loai" name="them_loai_ten_loai" value="" />
		  </p>
          <p>
            <label>Loại sản phẩm</label>
            <select class="text-input small-input" type="text" id="loai_san_pham" name="loai_san_pham" />
            {foreach $danh_sach_loai_san_pham as $loai_san_pham}
            <option value="{$loai_san_pham->ma_loai}">{$loai_san_pham->ten_loai}</option>
            {/foreach}
            </select>
          </p>

          <p>
            <input class="button" type="submit" value="Thêm" name="btn_them" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
