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

?>