<?php
    function kiem_tra_tk($tai_khoan,$mat_khau){
        $sql = "SELECT * FROM `taikhoan` WHERE ten_dang_nhap = '".$tai_khoan."' AND mat_khau = '".$mat_khau."'";  
        $taikhoan = pdo_query_one($sql); 
        return $taikhoan;
    }
    function dangxuat(){
        if (isset($_SESSION['user'])) {
            session_destroy();
            session_unset();
        }
    }

?>
<?php
function get_all_taikhoan() {
    $sql = " SELECT * FROM `taikhoan` ";
    $kq = pdo_query($sql);
    return $kq ;
}
function get_one_taikhoan() {
    $sql = " SELECT * FROM `taikhoan` " ;
    $kq = pdo_query_one($sql);
    return $kq ;
}
function update_taikhoan($id,$ten_dang_nhap,$mat_khau,$email,$so_dien_thoai,$dia_chi,$ho_ten,$nam_sinh,$ngay_dang_ky,$anh_tk,$vai_tro) {
    $sql =" UPDATE `taikhoan` SET `ten_dang_nhap`='$ten_dang_nhap',`mat_khau`='$mat_khau',`email`='$email',`so_dien_thoai`='$so_dien_thoai',`dia_chi`='$dia_chi',`ho_ten`='$ho_ten',`nam_sinh`='$nam_sinh',`ngay_dang_ky`='$ngay_dang_ky',`anh_tk`='$anh_tk',`vai_tro`='$vai_tro' WHERE id=".$id;
    $kq = pdo_query($sql);
    return $kq ;
}
function delete_taikhoan($id) {
$sql = "DELETE FROM `taikhoan` WHERE id = ".$id ;
$kq = pdo_query($sql);
return $kq ;
}
function quanly_taikhoan() {
    $sql= "SELECT * FROM `taikhoan`";
    $kq = pdo_query($sql) ;
    return $kq ; 

}
function dangky_taikhoan($ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky) {
    $sql = "INSERT INTO `taikhoan`(`ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`) VALUES ('$ten_dang_nhap','$mat_khau','$email','$ngay_dang_ky')";
    pdo_execute($sql);

}

?>