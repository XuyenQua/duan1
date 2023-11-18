<?php

    function get_hoadon_all(){
        $sql= "SELECT hoadon.id,hoadon.so_don_hang,hoadon.ngay,hoadon.nguoi_dung,hoadon.address,hoadon.mat_hang,hoadon.tong_tien FROM `hoadon`";
        $kq = pdo_query($sql);
        return $kq;
    }

    function get_dh_one($id){
        $sql= "SELECT * FROM `hoadon` WHERE id=".$id;
        $kq = pdo_query_one($sql);
        return $kq;
    }

    function update_dh($id,$so_don_hang,$address,$mat_hang,$tong_tien){
        $sql= "UPDATE `hoadon` SET `so_don_hang`='$so_don_hang',`address` ='$address',`mat_hang`='$mat_hang',`tong_tien`='$tong_tien' WHERE  id=".$id;
        pdo_execute($sql);
        
    }

    function delete_dh($id){
        $sql="DELETE FROM `hoadon` WHERE id=".$id;
        pdo_execute($sql);
    }
?>