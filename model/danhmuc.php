<?php
function insert_dm($ten_dm, $anh, $mo_ta_dm)
{
    $sql = "INSERT INTO `danhmuc`(`ten_dm`, `anh_dm`, `mo_ta_dm`) VALUES ('$ten_dm','$anh','$mo_ta_dm')";
    pdo_execute($sql);
}

function get_ds_dm_all()
{
    $sql = "SELECT * FROM `danhmuc`";
    $kq = pdo_query($sql);
    return $kq;
}

function get_dm_one($id)
{
    $sql = "SELECT * FROM `danhmuc` WHERE id = " . $id;
    // echo $sql;
    $kq = pdo_query_one($sql);
    return $kq;
}
function get_danh_muc_theo_dm_lon($ten_dm)
{
    $sql = "SELECT * FROM `danhmuc` WHERE ten_dm LIKE '%".$ten_dm."%'";
    $kq = pdo_query($sql);
    return $kq;
}
function update_dm($ten_dm, $anh, $mo_ta_dm, $id)
{
    $sql = "UPDATE `danhmuc` SET `ten_dm`='$ten_dm'";
    if (!$anh == "") {
        $sql .= " ,`anh_dm`='$anh'";
    }
    $sql .= " ,`mo_ta_dm`='$mo_ta_dm' WHERE id=" . $id;
    pdo_execute($sql);
}
function delete_dm($id)
{
    $sql = "DELETE FROM `sanpham` WHERE id_dm =" . $id;
    $sql1 = "DELETE FROM `danhmuc` WHERE id=" . $id;
    pdo_execute($sql);
    pdo_execute($sql1);
}
