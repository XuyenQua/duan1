<?php
    function get_binh_luan_san_pham($idsp){
        $sql = "SELECT binhluan.id'id_bl',taikhoan.ten_dang_nhap,binhluan.ngay_binh_luan,binhluan.noi_dung FROM `binhluan` JOIN taikhoan ON binhluan.id_tai_khoan = taikhoan.id WHERE id_san_pham =".$idsp;
        $kq =pdo_query($sql);
        // echo $sql;
        return $kq;
    }
    function delele_binh_luan($id){
        $sql = "DELETE FROM `binhluan` WHERE id = ".$id;
        pdo_execute($sql);
    }

    function insert_binh_luan($id_tai_khoan,$id_san_pham,$noi_dung,$ngay_binh_luan){
        $sql = "INSERT INTO `binhluan`(`id_tai_khoan`, `id_san_pham`, `noi_dung`, `ngay_binh_luan`) 
        VALUES ('$id_tai_khoan','$id_san_pham','$noi_dung','$ngay_binh_luan')";
        pdo_execute($sql);
    }
?>