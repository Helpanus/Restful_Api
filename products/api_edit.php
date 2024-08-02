<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id = $data->id;
        $category_id = $data->category_id;
        $nama = $data->nama;
        $harga = $data->harga;
        $qty = $data->qty;

        $sql = $conn->prepare("UPDATE products SET category_id=?, nama=?, harga=?, qty=? WHERE id=?");
        $sql->bind_param('ssddd', $category_id, $nama, $harga, $qty, $id);
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