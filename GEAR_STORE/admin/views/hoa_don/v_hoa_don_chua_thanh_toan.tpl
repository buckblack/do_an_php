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
          <th>Mã hoá đơn</th>
          <th>Mã khách hàng</th>
          <th>Tên khách hàng</th>
          <th>Ngày đặt</th>
          <th>Trị giá</th>
          <th>Thanh toán</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> {$thanh_phan_trang} </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $danh_sach_hoa_don as $hoa_don}
        <tr>
          <td>{$hoa_don->so_hoa_don}&nbsp;&nbsp;&nbsp;<a href="chi_tiet_hoa_don.php?ma_hoa_don={$hoa_don->so_hoa_don}">xem</a></td>
          <td>{$hoa_don->ma_khach_hang}</td>
          <td>{$hoa_don->ten_khach_hang}</td>
          
          <th>{$hoa_don->ngay_hd}</th>
          <th>{number_format($hoa_don->tri_gia)}</th>
          <td><!-- Icons -->  
            <a href="javascript:thanh_toan({$hoa_don->so_hoa_don})" title="Thanh toán"> 
            <i>Thanh toán</i>
            </a>
            </td>
        </tr>
        
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
