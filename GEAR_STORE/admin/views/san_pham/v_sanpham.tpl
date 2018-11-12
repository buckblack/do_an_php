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
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Loại sản phẩm</th>
          <th>Mô tả</th>
          <th>Đơn giá</th>
          <th>hình</th>
          <th>&nbsp;</th>
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
        {foreach $danh_sach_san_pham as $san_pham}
        <tr>
          <td>{$san_pham->ma_san_pham}</td>
          <td>{$san_pham->ten_san_pham}</td>
          <td>{$san_pham->ten_loai}</td>
          <td>{$san_pham->mo_ta_chi_tiet}</td>
          <th>{number_format($san_pham->don_gia)}</th>
          <th>{$san_pham->hinh}</th>
          <td><!-- Icons --> 
            <a href="sua_san_pham.php?ma_san_pham={$san_pham->ma_san_pham}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:xoa_san_pham({$san_pham->ma_san_pham})" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
