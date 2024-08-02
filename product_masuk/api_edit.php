<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id = $data->id;
        $product_id = $data->product_id;
        $supplier_id = $data->supplier_id;
        $qty = $data->qty;
        $tanggal = $data->tanggal;

        $sql = $conn->prepare("UPDATE product_masuk SET product_id=?, supplier_id=?, qty=?, tanggal=? WHERE id=?");
        $sql->bind_param('ssddd', $product_id, $supplier_id, $qty, $tanggal, $id);
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