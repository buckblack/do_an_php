<table>
      <thead>
        <tr>
          <th>Mã hoá đơn</th>
          <th>Mã khách hàng</th>
          <th>Tên khách hàng</th>
          <th>Ngày đặt</th>
          <th>Trị giá</th>
          <th>Tình trạng</th>
          <th>Thanh toán</th>
        </tr>
      </thead>
      
      <tbody>
<?php
include_once("models/m_hoa_don.php");
$m_hoa_don=new M_hoa_don();
$danh_sach_hoa_don=array();
$ma_hoa_don=$_POST['tu_khoa'];
$ten_khach_hang=$_POST['tu_khoa'];
if(trim($ma_hoa_don)!='')
{
	$danh_sach_hoa_don=$m_hoa_don->tim_hoa_don($ma_hoa_don,$ten_khach_hang);
}
if(count($danh_sach_hoa_don)>0)
{
	foreach($danh_sach_hoa_don as $hoa_don)
	{
?>
      <tr >
        <td><?php echo $hoa_don->so_hoa_don ?>&nbsp;&nbsp;&nbsp;<a href="chi_tiet_hoa_don.php?ma_hoa_don=<?php echo $hoa_don->so_hoa_don ?>">xem</a></td>
        <td><?php echo $hoa_don->ma_khach_hang ?></td>
        <td><?php echo $hoa_don->ten_khach_hang ?></td>
        <td><?php echo $hoa_don->ngay_hd ?></td>
        <th><?php echo number_format($hoa_don->tri_gia) ?></th>
        <th><?php echo $hoa_don->tinh_trang ?></th>
        <?php 
		if($hoa_don->tinh_trang=="CHUA THANH TOAN")
		{
		?>
        <th><!-- Icons --> 
          <a href="javascript:thanh_toan(<?php echo $hoa_don->so_hoa_don ?>)" title="Thanh toán"> 
            <i>Thanh toán</i>
            </a>
        </th>
        
        <?php
		}
		else
		{
			echo "<th></th>";
		}
	  ?>
      </tr>
      
      

      
      
      </div>
<?php
	}
}
else
{
?>
	<tr align="center"><td colspan="7"><b>Không tìm thấy hoá đơn nào</b></td></tr>

<?php
}

?>
        </tbody>
      
    </table>