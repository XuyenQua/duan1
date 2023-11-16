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