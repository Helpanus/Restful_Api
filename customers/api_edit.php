<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id = $data->id;
        $nama = $data->nama;
        $alamat = $data->alamat;
        $email = $data->email;
        $telepon = $data->telepon;

        $sql = $conn->prepare("UPDATE customers SET nama=?, alamat=?, email=?, telepon=? WHERE id=?");
        $sql->bind_param('ssddd', $nama, $alamat, $email, $telepon, $id);
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