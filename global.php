<?php 
    $img_path = 'upload/';
    $img_path_admin = '../upload/';

    function phi_van_chuyen($tong_tien){
        if ($tong_tien==0) {
            $phi_van_chuyen =0;
        }else if(($tong_tien >= 1)&&($tong_tien <=700000)) {
            $phi_van_chuyen = 30000;
        }else{
            $phi_van_chuyen = 0;
        }
        return $phi_van_chuyen;
    }
    function mau_trang_thai($trang_thai){
        $kq = "";
        switch ($trang_thai) {
            case '1':
                $kq = "badge-sa-info";
                break;
            case '2':
                $kq = " badge-sa-warning";
                break;
            case '3':
               $kq = "badge-sa-theme";
                break;
            case '4':
                $kq = "badge-sa-primary";
                break;
            case '5':
                $kq = "badge-sa-danger";
                break;
            case '6':
                $kq = "badge-sa-success";
                break;    
            default:
                # code...
                break;
        }
        return $kq;
    }

   
?>