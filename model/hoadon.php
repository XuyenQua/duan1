<?php
    function insert_hoa_don($id_tai_khoan,$ten_khach_hang,$so_dien_thoai,$dia_chi,$email,$pttt,$ma_giam_gia,$giam_gia,$tong_tien,$ngay_dat_hang,$ghi_chu){
       
        $sql ="INSERT INTO `hoadon`(`id_tai_khoan`, `ten_khach_hang`, `so_dien_thoai`, `dia_chi`, `email`, `pttt`, `ma_giam_gia`, `giam_gia`, `tong_tien`, `ngay_dat_hang`, `ghi_chu`)  VALUES ('$id_tai_khoan','$ten_khach_hang','$so_dien_thoai','$dia_chi','$email','$pttt','$ma_giam_gia','$giam_gia','$tong_tien','$ngay_dat_hang','$ghi_chu')";
       // echo $sql;
        return pdo_execute_return_lastInsertID($sql);
    }
    function insert_san_pham_hoa_don($id_hoa_don,$id_san_pham,$anh_sp,$ten_sp,$gia_sp,$so_luong,$thanh_tien){
        $sql ="INSERT INTO `sanpham_hoadon`( `id_hoa_don`, `id_san_pham`, `anh_sp`, `ten_sp`, `gia_sp`, `so_luong`, `thanh_tien`) VALUES ('$id_hoa_don','$id_san_pham','$anh_sp','$ten_sp','$gia_sp','$so_luong','$thanh_tien')";
        pdo_execute($sql);
    }
    function delete_hoa_don($id){
        $sql="DELETE FROM `sanpham_hoadon` WHERE id_hoa_don =" .$id;
        $sql1= " DELETE FROM `hoadon` WHERE id = ".$id;
        pdo_execute($sql);
        pdo_execute($sql1);
    }

    function update_hoa_don($id,$ten_khach_hang,$so_dien_thoai,$dia_chi,$email,$trang_thai,$tong_tien,$ghi_chu){
        $sql = "UPDATE `hoadon` SET `ten_khach_hang`='$ten_khach_hang',`so_dien_thoai`='$so_dien_thoai',`dia_chi`='$dia_chi',`email`='$email',`trang_thai`='$trang_thai',`tong_tien`='$tong_tien',`ghi_chu`='$ghi_chu' WHERE id =".$id;
        pdo_execute($sql);
    }

    function get_hoa_don_all($id){
        $sql = "SELECT * FROM `hoadon`";
        if($id != 0){
            $sql .= " WHERE id_tai_khoan = ".$id;
        }
            
        
        
        $kq= pdo_query($sql);
        return $kq;
    }

    function get_hoa_don_one($id){
        $sql = "SELECT * FROM `hoadon` WHERE id =".$id;
        $kq= pdo_query_one($sql);
        return $kq;
    }

    function get_san_pham_hoa_don($id){
        $sql= "SELECT * FROM `sanpham_hoadon` WHERE id_hoa_don = ".$id;
        $kq = pdo_query($sql);
        return $kq;
    }

    function get_hoa_don_tai_khoan($id){
        $sql = "SELECT id'id_hoa_don',id_tai_khoan,ten_khach_hang,so_dien_thoai,dia_chi,email,trang_thai,pttt,tong_tien,ngay_dat_hang,ghi_chu FROM `hoadon` WHERE id_tai_khoan = ".$id." LIMIT 7";
        $kq  = pdo_query($sql);
        return $kq;
    }

    function get_trang_thai($id){
        $sql ="SELECT * FROM `trangthai` WHERE id= ".$id;
        $kq = pdo_query_one($sql);
        extract($kq);
        return $ten_tt;
    }

    function get_pttt(){
        $sql = "SELECT * FROM `pttt`";
        $kq =pdo_query($sql);
        return $kq;
    }
    function get_ten_pttt($id){
        $sql ="SELECT * FROM `pttt` WHERE id= ".$id;
        $kq = pdo_query_one($sql);
        extract($kq);
        return $ten_pttt;
    }
    function get_pttt_one($id){
        $sql = "SELECT * FROM `pttt` WHERE id= ".$id;
        $kq =pdo_query_one($sql);
        extract($kq);
        return $ten_pttt;
    }

    function get_trang_thai_all(){
        $sql ="SELECT * FROM `trangthai`";
        $kq = pdo_query($sql);
        return $kq;
    }

    function update_so_luong_san_pham_hoa_don($id,$id_hoa_don,$so_luong){
        $sql = "UPDATE `sanpham_hoadon` SET `so_luong`='$so_luong' WHERE id_hoa_don = ".$id_hoa_don." AND id = ".$id;
        pdo_execute($sql);
    }
    
    function tong_so_ban(){
        $sql = "SELECT SUM(tong_tien)'tong' FROM `hoadon` ";
        $kq= pdo_query_one($sql);
        extract($kq);
        if($tong!=null){
            return $tong;
        }else{
            return 0;
        }
        
    }

    function trung_binh_gia_tri_don_hang(){
        $sql = "SELECT AVG(tong_tien)'trungbinh' FROM `hoadon` ";
        $kq= pdo_query_one($sql);
        extract($kq);
        if($trungbinh!=null){
            return $trungbinh;
        }else{
            return 0;
        }
        
    }

    function tong_so_don_dat_hang(){
        $sql = "SELECT COUNT(id)'sodon' FROM `hoadon` ";
        $kq= pdo_query_one($sql);
        extract($kq);
        if($sodon!=null){
            return $sodon;
        }else{
            return 0;
        }
        
    }

    function get_don_dat_hang_gan_day(){
        $sql = "SELECT * FROM `hoadon`  ORDER BY id DESC  LIMIT 8";
        $kq= pdo_query($sql);
        return $kq;
    }

    function get_thong_ke_thang($thang){
        $sql ="SELECT Sum(`tong_tien`)'tong' FROM `hoadon` WHERE trang_thai = 6 AND MONTH(ngay_dat_hang) = ".$thang;
        $kq=  pdo_query_one($sql);
        extract($kq);
        if($tong!=null){
            return $tong;
        }else{
            return 0;
        }
    }

    function huy_don_hang($id){
        $sql = "UPDATE `hoadon` SET `trang_thai`='5' WHERE id = ".$id;
        pdo_execute($sql);
    }
    function xac_nhan_don_hang($id){
        $sql = "UPDATE `hoadon` SET `trang_thai`='6' WHERE id = ".$id;
        pdo_execute($sql);
    }

?>