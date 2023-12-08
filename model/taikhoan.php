<?php
function kiem_tra_tk($tai_khoan)
{
    $sql = "SELECT * FROM `taikhoan` WHERE ten_dang_nhap = '" . $tai_khoan . "'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function dang_ky_tai_khoan($ten_dang_nhap, $mat_khau, $email, $ho_ten, $ngay_dang_ky)
{

    $sql = "INSERT INTO `taikhoan`(`ten_dang_nhap`, `mat_khau`, `email`,`ho_ten`, `ngay_dang_ky`) 
            VALUES ('$ten_dang_nhap','$mat_khau','$email','$ho_ten','$ngay_dang_ky')";
    pdo_execute($sql);
}

function doi_mat_khau($id_tai_khoan, $mat_khau_moi)
{
    $sql = "UPDATE `taikhoan` SET `mat_khau`='$mat_khau_moi' WHERE id = " . $id_tai_khoan;
    pdo_execute($sql);
}
function doi_thong_tin($ho_ten, $email, $so_dien_thoai, $dia_chi, $nam_sinh, $id_tai_khoan)
{
    $sql = "UPDATE `taikhoan` SET `email`='$email',`so_dien_thoai`='$so_dien_thoai',`dia_chi`='$dia_chi',`ho_ten`='$ho_ten',`nam_sinh`='$nam_sinh' WHERE id =" . $id_tai_khoan;
    pdo_execute($sql);
}
function dangxuat()
{
    if (isset($_SESSION['user'])) {
        session_destroy();
        session_unset();
    }
    if (isset($_SESSION['e_user'])) {
        unset($_SESSION['e_user']);
    }
}

function get_tai_khoan_all($id)
{
    $sql = "SELECT taikhoan.id,taikhoan.ten_dang_nhap,taikhoan.so_dien_thoai,taikhoan.mat_khau,taikhoan.email,taikhoan.dia_chi,taikhoan.ho_ten,taikhoan.vai_tro'id_vai_tro',taikhoan.nam_sinh,taikhoan.ngay_dang_ky,taikhoan.anh_tk,vaitro.ten_vt'vai_tro' FROM `taikhoan` JOIN vaitro ON taikhoan.vai_tro = vaitro.id WHERE taikhoan.vai_tro = " . $id;
    $kq = pdo_query($sql);
    return $kq;
}
function delete_tai_khoan($id)
{
    $sql = "DELETE FROM `taikhoan` WHERE id =" . $id;
    pdo_execute($sql);
}

function get_chi_tiet_tai_khoan($id)
{
    $sql = "SELECT * FROM `taikhoan` WHERE id = " . $id;
    $kq = pdo_query_one($sql);
    return $kq;
}

function get_vai_tro($id)
{
    $sql = "SELECT * FROM `vaitro` WHERE id= " . $id;
    $kq = pdo_query_one($sql);
    extract($kq);
    return $ten_vt;
}


function guiMail($email)
{
    $sql = "SELECT * FROM `taikhoan` WHERE email = '$email'";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false) {
        guiMailMK($email, $taikhoan['ten_dang_nhap'], $taikhoan['mat_khau']);
        return 'gửi mai thành công';
    } else {
        return 'email không tồn tại';
    }
}

function guiMailMK($email, $user, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'xuyentest1@gmail.com';                     //SMTP username
        $mail->Password   = 'xqgjjjvacpfcvwuy';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;
        $mail->CharSet = "UTF-8";

        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        //Recipients
        $mail->setFrom('xuyenqua@example.com', 'XDQ-SHOP');
        $mail->addAddress($email, $user);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Người dùng quên mật khẩu';
        $mail->Body    =  'tài khoản của bạn là:' . $user . ' ' . 'Mật khẩu của bạn là:' . $pass;
        // $mail->AltBody = '';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
