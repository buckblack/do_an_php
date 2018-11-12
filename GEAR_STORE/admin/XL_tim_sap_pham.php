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
      
      <tbody>
<?php
include_once("models/m_san_pham.php");
$m_san_pham=new M_san_pham();
$danh_sach_san_pham=array();
$ma_san_pham=$_POST['tu_khoa'];
$ten_san_pham=$_POST['tu_khoa'];
if(trim($ma_san_pham)!='')
{
	$danh_sach_san_pham=$m_san_pham->Tim_san_pham($ma_san_pham,$ten_san_pham);
}
if(count($danh_sach_san_pham)>0)
{
	foreach($danh_sach_san_pham as $san_pham)
	{
?>
      <tr >
        <td><?php echo $san_pham->ma_san_pham ?></td>
        <td><?php echo $san_pham->ten_san_pham ?></td>
        <td><?php echo $san_pham->ten_loai ?></td>
        <td><?php echo $san_pham->mo_ta_chi_tiet ?></td>
        <th><?php echo number_format($san_pham->don_gia) ?></th>
        <th><?php echo $san_pham->hinh ?></th>
        <td><!-- Icons --> 
          <a href="sua_san_pham.php?ma_san_pham=<?php echo $san_pham->ma_san_pham ?>" title="Edit" > <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" /> </a> <a href="javascript:xoa_san_pham(<?php echo $san_pham->ma_san_pham ?>)" title="Delete"> <img src="public/layout/resources/images/icons/cross.png" alt="Delete" /> </a></td>
      </tr>

      
      
      </div>
<?php
	}
}
else
{
?>
	<tr align="center"><td colspan="7"><b>Không tìm thấy sản phẩm nào</b></td></tr>

<?php
}

?>
        </tbody>
      
    </table>