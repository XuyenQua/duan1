<?php 
    function insert_sanpham($ma_sp,$ten_sp,$gia_sp,$gia_cu_sp,$so_luong,$thuong_hieu_sp,$mo_ta_sp,$mo_ta_ngan_sp,$id_dm){
         if ($gia_cu_sp=="") {
            $sql = "INSERT INTO `sanpham`( `ma_sp`, `ten_sp`, `gia_sp`, `so_luong`, `thuong_hieu_sp`, `mo_ta_sp`, `mo_ta_ngan_sp`, `id_dm`) 
            VALUES ('$ma_sp','$ten_sp','$gia_sp','$so_luong','$thuong_hieu_sp','$mo_ta_sp','$mo_ta_ngan_sp','$id_dm')";
           
        }else{
            $sql = "INSERT INTO `sanpham`( `ma_sp`, `ten_sp`, `gia_sp`, `gia_cu_sp`, `so_luong`, `thuong_hieu_sp`, `mo_ta_sp`, `mo_ta_ngan_sp`, `id_dm`) 
        VALUES ('$ma_sp','$ten_sp','$gia_sp','$gia_cu_sp','$so_luong','$thuong_hieu_sp','$mo_ta_sp','$mo_ta_ngan_sp','$id_dm')";
       
        }
        return pdo_execute_return_lastInsertID($sql);
    }

    function insert_san_pham_anh($id_san_pham,$anh_sp){
        if ($anh_sp!="") {
            $sql = "INSERT INTO `sanpham_anh`( `id_san_pham`, `anh_sp`) VALUES ('$id_san_pham','$anh_sp')";
            pdo_execute($sql);
        }
    }
    function delete_san_pham($id){
        $sql = "DELETE FROM `sanpham` WHERE id =".$id;
        pdo_execute($sql);

    }
    function update_san_pham($id,$ma_sp,$ten_sp,$gia_sp,$gia_cu_sp,$so_luong,$thuong_hieu_sp,$mo_ta_sp,$mo_ta_ngan_sp,$id_dm){
        $sql = "UPDATE `sanpham` SET `ma_sp`='$ma_sp',`ten_sp`='$ten_sp',`gia_sp`='$gia_sp',`gia_cu_sp`='$gia_cu_sp',`so_luong`='$so_luong',`thuong_hieu_sp`='$thuong_hieu_sp',`mo_ta_sp`='$mo_ta_sp',`mo_ta_ngan_sp`='$mo_ta_ngan_sp',`id_dm`='$id_dm' WHERE id =".$id;
        pdo_execute($sql);
    }
    function get_san_pham_all(){
        $sql = "SELECT sanpham.id,sanpham.ma_sp,sanpham.ten_sp,sanpham.gia_sp,sanpham.gia_cu_sp,sanpham.so_luong,sanpham.da_ban,sanpham.luot_xem,sanpham.thuong_hieu_sp,sanpham.mo_ta_sp,sanpham.mo_ta_ngan_sp,danhmuc.id'id_dm',danhmuc.ten_dm FROM `sanpham` JOIN danhmuc ON sanpham.id_dm = danhmuc.id";
        $kq = pdo_query($sql);
        return $kq;
    }
    function get_san_pham_anh_one($idsp){
        $sql = "SELECT id'id_anh',id_san_pham,anh_sp FROM `sanpham_anh` WHERE id_san_pham = ".$idsp;
        $kq = pdo_query_one($sql);
        return $kq;
    }
    function get_san_pham_anh($idsp){
        $sql = "SELECT id'id_anh',id_san_pham,anh_sp FROM `sanpham_anh` WHERE id_san_pham = ".$idsp;
        $kq = pdo_query($sql);
        return $kq;
    }

    function get_san_pham_one($id){
        $sql = "SELECT * FROM `sanpham`  WHERE id =".$id;
        $kq = pdo_query_one($sql);
        return $kq;
    }

    function detele_san_pham_anh($id_anh_sp){
        $sql = "DELETE FROM `sanpham_anh` WHERE id =".$id_anh_sp;
        pdo_execute($sql);
    }

    function get_san_pham_all_dm($id_dm){
        $sql = "SELECT * FROM `sanpham` WHERE id_dm = ".$id_dm;
        //echo $sql;
        $kq = pdo_query($sql);
        return $kq;
    }

    function get_10_san_pham_moi(){
        $sql ="SELECT * FROM `sanpham` ORDER BY id DESC LIMIT 10";
        $kq = pdo_query($sql);
        return $kq;
    }
    function get_10_san_pham_ban_chay(){
        $sql = "SELECT * FROM `sanpham` ORDER BY da_ban DESC LIMIT 10";
        $kq = pdo_query($sql);
        return $kq;
    }
    function get_10_san_pham_yeu_thich(){
        $sql = "SELECT * FROM `sanpham` ORDER BY luot_xem DESC LIMIT 10";
        $kq = pdo_query($sql);
        return $kq;
    }


    function get_san_pham_cung_danh_muc($id){
        $sql = "SELECT * FROM `sanpham` WHERE id_dm = ".$id;
        $kq = pdo_query($sql);
        return $kq;
    }
    function san_pham_luot_xem($id){
        $sql = "UPDATE `sanpham` SET `luot_xem`= luot_xem + 1 WHERE id = ".$id;
        pdo_execute($sql);
    }
    function san_pham_da_ban($id,$so_luong){
        $sql = "UPDATE `sanpham` SET `da_ban`= da_ban + ".$so_luong." WHERE id = ".$id;
        pdo_execute($sql);
    }

    function tim_kiem_san_pham($kyw){
        $sql ="SELECT * FROM `sanpham` WHERE ten_sp LIKE '%".$kyw."%'";
        $kq = pdo_query($sql);
        return $kq;
    }
?>