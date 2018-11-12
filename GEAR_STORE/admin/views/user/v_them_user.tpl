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
            <label>Họ tên</label>
            <input class="text-input small-input" type="text" id="ho_ten" name="ho_ten" value="" />
          </p>
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input small-input" type="text" id="ten_dang_nhap" name="ten_dang_nhap" value="" />
          </p>
          <p>
            <label>Loại user</label>
            <select class="text-input small-input" type="text" name="loai_user" />
            <option value="1">admin</option>
            <option value="2">Nhân viên</option>
            </select>
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input" type="text" id="email" name="email" value="" />
          </p>
          <p>
            <label>Mật khẩu</label>
            <input class="text-input small-input" type="password" id="mat_khau" name="mat_khau" value="" />
          </p>
          <p>
            <label>Nhập lại mật khẩu</label>
            <input class="text-input small-input" type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" value="" />
          </p>
          
            <input class="button" type="submit" value="Xác nhận" name="btn_them" onclick="return kiem_tra_them_user()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='themuser.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
