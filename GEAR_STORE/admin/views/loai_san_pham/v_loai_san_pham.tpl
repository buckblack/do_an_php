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
          <th>Mã loại</th>
          <th>Tên loai</th>
          <th>Thư mục</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="4">
            <div class="pagination">  </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        {foreach $danh_sach_loai_san_pham as $loai}
        <tr>
          <td>{$loai->ma_loai}</td>
          <td>{$loai->ten_loai}</td>
          <td>{$loai->thu_muc}</td>

          <td><!-- Icons --> 
            <a href="sua_loai_san_pham.php?ma_loai_san_pham={$loai->ma_loai}" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
   
  </div>
  
</div>
