<?php
class C_gui_mail
{
	function gui_mail_dat_hang($ten_khach_hang,$dia_chi,$dien_thoai,$email)
	{
				// Gui mail
				include_once("models/m_gio_hang.php");
				$m_gio_hang= new M_gio_hang();
				require_once("public/smtpgmail/src/Exception.php");
				require_once("public/smtpgmail/src/PHPMailer.php");
				require_once("public/smtpgmail/src/OAuth.php");
				require_once("public/smtpgmail/src/SMTP.php");
				require_once("public/smtpgmail/src/POP3.php");
				$mail=new PHPMailer\PHPMailer\PHPMailer();
				$mail->IsSMTP(); // Chứng thực SMTP
				$mail->SMTPAuth=TRUE;
				$mail->Host="smtp.gmail.com";
				$mail->Port=465;
				$mail->SMTPSecure="ssl";
				/* Server google*/
				$mail->Username="long4581994@gmail.com"; // Nhập mail 
				$mail->Password="khoa1234"; // Mật khẩu
				/* Server google*/
				$mail->CharSet="utf-8";
				$noidung="<p>Thông tin đơn hàng</p>";
				$noidung.="<p>Địa chỉ: <b><i>$dia_chi</i></b></p>";
				$noidung.="<p>Điện thoại: <b><i>$dien_thoai</i></b></p>";
				/*foreach($_SESSION['gio_hang'] as $k=>$v)
				{
					$san_pham=$m_gio_hang->Doc_san_pham_theo_ma($k);
					$noidung.="Tên sản phẩm: ".$san_pham->ten_san_pham.'--';
					$noidung.="Số lượng: ".$v.'--';
					$noidung.="Đơn giá: ".$san_pham->don_gia.'<br>';
				}*/
				$tong_tien=number_format($_SESSION['tong_tien']);
				$danhsach='';
				foreach($_SESSION['gio_hang'] as $k=>$v)
				{
					$san_pham=$m_gio_hang->Doc_san_pham_theo_ma($k);
					$don_gia=number_format($san_pham->don_gia);
					$danhsach.="<tr>
					  <td>$san_pham->ten_san_pham</td>
					  <td >$v</td>
					  <td >$don_gia VNĐ</td>
					</tr>";
				}
				$noidung.="<table align='center' border='1' style='border-collapse:collapse' width='700px'>
					  <tr bgcolor='#66CCFF'>
					  	<th>Tên sản phẩm</th>
						<th>số lượng</th>
						<th>Giá</th>
					  </tr>
					$danhsach
					<tr >
					  <td style='font-size:20px; font-weight:bold' colspan='4' >Tổng tiền: $tong_tien VNĐ</td>
					</tr>
				  </table>";
				
				$mail->SetFrom("gearstore@gmail.com","GEAR STORE");
				$mail->Subject="Đặt hàng thành công";
				$mail->MsgHTML($noidung);
				$mail->AddAddress($email,$ten_khach_hang); // Mail người nhận
				//$path="public/images/hinh_mon_an/Banh-Canh-Thit.jpg";
				//$mail->AddAttachment($path,"Banh-Canh-Thit.jpg");
				
				$mail->AddBCC("buckblack44@gmail.com","Quản trị viên");
			
				$mail->Send();

	}
	
	function gui_mail_lien_he($ho_ten,$email,$dien_thoai,$noi_dung)
	{
				// Gui mail
				include_once("models/m_gio_hang.php");
				$m_gio_hang= new M_gio_hang();
				require_once("public/smtpgmail/src/Exception.php");
				require_once("public/smtpgmail/src/PHPMailer.php");
				require_once("public/smtpgmail/src/OAuth.php");
				require_once("public/smtpgmail/src/SMTP.php");
				require_once("public/smtpgmail/src/POP3.php");
				$mail=new PHPMailer\PHPMailer\PHPMailer();
				$mail->IsSMTP(); // Chứng thực SMTP
				$mail->SMTPAuth=TRUE;
				$mail->Host="smtp.gmail.com";
				$mail->Port=465;
				$mail->SMTPSecure="ssl";
				/* Server google*/
				$mail->Username="long4581994@gmail.com"; // Nhập mail 
				$mail->Password="khoa1234"; // Mật khẩu
				/* Server google*/
				$mail->CharSet="utf-8";
				$noidung="<b>Cảm ơn bạn đã liên hệ, GEAR STORE sẽ liên lạc với bạn($dien_thoai) trong thời gian sớm nhất</b><br>";
				$noidung.=$noi_dung;
				$mail->SetFrom("gearstore@gmail.com","GEAR STORE");
				$mail->Subject="Liên hệ";
				$mail->MsgHTML($noidung);
				$mail->AddAddress("buckblack44@gmail.com","Quản trị viên"); // Mail người nhận
				$mail->AddBCC($email,$ho_ten);
				$mail->Send();

	}
	
	function gui_mail_dang_ky($ho_ten,$email,$ten_dang_nhap,$mat_khau)
	{
				// Gui mail
				include_once("models/m_gio_hang.php");
				$m_gio_hang= new M_gio_hang();
				require_once("public/smtpgmail/src/Exception.php");
				require_once("public/smtpgmail/src/PHPMailer.php");
				require_once("public/smtpgmail/src/OAuth.php");
				require_once("public/smtpgmail/src/SMTP.php");
				require_once("public/smtpgmail/src/POP3.php");
				$mail=new PHPMailer\PHPMailer\PHPMailer();
				$mail->IsSMTP(); // Chứng thực SMTP
				$mail->SMTPAuth=TRUE;
				$mail->Host="smtp.gmail.com";
				$mail->Port=465;
				$mail->SMTPSecure="ssl";
				/* Server google*/
				$mail->Username="long4581994@gmail.com"; // Nhập mail 
				$mail->Password="khoa1234"; // Mật khẩu
				/* Server google*/
				$mail->CharSet="utf-8";
				$noidung="<p>Chào <b>$ho_ten</b>, bạn đạ đăng ký thành công tài khoản GEAR STORE</p>";
				$noidung.="<p>Tài khoản: <b>$ten_dang_nhap</b></p>";
				$noidung.="<p>Mật khẩu: <b>$mat_khau</b></p>";
				$mail->SetFrom("gearstore@gmail.com","GEAR STORE");
				$mail->Subject="Liên hệ";
				$mail->MsgHTML($noidung);
				$mail->AddAddress("buckblack44@gmail.com","Quản trị viên"); // Mail người nhận
				$mail->AddBCC($email,$ho_ten);
				$mail->Send();

	}
}

?>