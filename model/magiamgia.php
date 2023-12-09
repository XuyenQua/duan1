<?php 
    function insert_ma_giam_gia($ma_giam_gia,$gia_tri,$so_luong){
        $sql ="INSERT INTO `magiamgia`(`ma_giam_gia`, `giam_gia`, `so_luong`) VALUES ('$ma_giam_gia','$gia_tri','$so_luong')";
        //echo $sql;
        pdo_execute($sql);
    }

    function get_ma_giam_gia_all(){
        $sql ="SELECT * FROM `magiamgia`";
        $kq = pdo_query($sql);
        return $kq;
    }
    function get_ma_giam_gia_one($id){
        $sql ="SELECT * FROM `magiamgia` WHERE id_giamgia =".$id;
        $kq = pdo_query_one($sql);
        return $kq;
    }
    function update_ma_giam_gia($ma_giam_gia,$gia_tri,$so_luong,$id){
        $sql ="UPDATE `magiamgia` SET `ma_giam_gia`='$ma_giam_gia',`giam_gia`='$gia_tri',`so_luong`='$so_luong' WHERE id_giamgia = ".$id;
        //echo $sql;
        pdo_execute($sql);
    }
    function delete_ma_giam_gia($id){
        $sql ="DELETE FROM `magiamgia` WHERE id_giamgia =".$id;
        //echo $sql;
        pdo_execute($sql);
    }

    function kt_ma_giam_gia($ma_giam_gia){
        $sql ="SELECT * FROM `magiamgia` WHERE ma_giam_gia = '$ma_giam_gia'";
       // echo $sql;
        $kq = pdo_query_one($sql);
        return $kq;
    }
    function su_dung_ma($id){
        $sql = "UPDATE `magiamgia` SET `so_luong`= so_luong-1 WHERE id_giamgia =".$id;
        pdo_execute($sql);
    }
?>