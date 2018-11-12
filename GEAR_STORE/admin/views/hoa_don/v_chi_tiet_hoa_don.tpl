<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
  <h2 align="center">Hoá đơn: {$smarty.get.ma_hoa_don}</h2>
    <table>
      <thead>
        <tr>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <th>Đơn giá</th>
        </tr>
      </thead>
      <tbody>
      {if $chi_tiet_hoa_don|@count>0}
        {foreach $chi_tiet_hoa_don as $hoa_don}
        <tr>
          <th>{$hoa_don->ma_san_pham}</th>
          <th>{$hoa_don->ten_san_pham}</th>
          <th>{$hoa_don->so_luong}</th>
          <th>{number_format($hoa_don->don_gia)}</th>
        </tr>
        {/foreach}
        {else}
        <tr>
          <td colspan="4"><b>Không tìm thấy hoá đơn nào</b></td>
        </tr>
        {/if}
      </tbody>
    </table>
   
  </div>
  
</div>
