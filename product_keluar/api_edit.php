<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id = $data->id;
        $product_id = $data->product_id;
        $customer_id = $data->customer_id;
        $qty = $data->qty;
        $tanggal = $data->tanggal;

        $sql = $conn->prepare("UPDATE product_keluar SET product_id=?, customer_id=?, qty=?, tanggal=? WHERE id=?");
        $sql->bind_param('ssddd', $product_id, $customer_id, $qty, $tanggal, $id);
        $sql->execute();
        if ($sql){
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        }else {
            echo json_encode(array('RESPONSE' => 'FAILED'));
        }
        }else {
            echo "GAGAL";
        }
?>