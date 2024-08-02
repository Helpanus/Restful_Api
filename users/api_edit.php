<?php
    require_once('../config/koneksi_db.php');
    $data = json_decode(file_get_contents("php://input"));

    if ($data->id!=null){
        $id = $data->id;
        $name = $data->name;
        $email = $data->email;

        $sql = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
        $sql->bind_param('ssddd', $name, $email, $id);
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