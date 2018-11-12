<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post">
        <fieldset>
        
          <p>
            <label>Mật khẩu hiện tại</label>
            <input class="text-input small-input" type="password" id="mat_khau_hien_tai" name="mat_khau_hien_tai" value="" />
          </p>
          <p>
            <label>Mật khẩu mới</label>
            <input class="text-input small-input" type="password" id="mat_khau_moi" name="mat_khau_moi" value="" />
          </p>
          <p>
            <label>Nhập lại mật khẩu mới</label>
            <input class="text-input small-input" type="password" id="nhap_lai_mat_khau_moi" name="nhap_lai_mat_khau_moi" value="" />
          </p>
            <input class="button" type="submit" value="Xác nhận" name="btn_xac_nhan" onclick="return kiem_tra_user()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
