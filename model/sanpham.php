<?php 
    function insert_sanpham(){
        $sql = "INSERT INTO `sanpham`(`id`, `ma_sp`, `ten_sp`, `gia_sp`, `gia_cu_sp`, `so_luong`, `anh_sp`, `thuong_hieu_sp`, `mo_ta_sp`, `mo_ta_ngan_sp`, `id_dm`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')";
        pdo_execute($sql);
    }
    function delete_sanpham(){
        $sql = "DELETE FROM `sanpham` WHERE id";
        pdo_execute($sql);

    }
    function update_sanpham(){
        $sql = "UPDATE `sanpham` SET `id`='[value-1]',`ma_sp`='[value-2]',`ten_sp`='[value-3]',`gia_sp`='[value-4]',`gia_cu_sp`='[value-5]',`so_luong`='[value-6]',`anh_sp`='[value-7]',`thuong_hieu_sp`='[value-8]',`mo_ta_sp`='[value-9]',`mo_ta_ngan_sp`='[value-10]',`id_dm`='[value-11]' WHERE id";
        pdo_execute($sql);
    }
    function get_sanpham_all(){
        $sql = "";
        pdo_query($sql);
    }
    function get_sanpham_one(){
        $sql = "";
        pdo_query_one($sql);
    }

?>