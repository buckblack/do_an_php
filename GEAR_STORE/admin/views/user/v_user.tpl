<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th>Họ tên</th>
          <th>Tên đăng nhập</th>
          <th>Loại tài khoản</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $danh_sach_user as $user}
        <tr>
          <td>{$user->ho_ten}</td>
          <td>{$user->ten_dang_nhap}</td>
          <td>{$user->ma_loai_nguoi_dung}</td>
          <td><!-- Icons --> 
            <a href="javascript:xoa_user('{$user->ten_dang_nhap}')" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
