<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $sql = $conn->prepare("INSERT INTO categories (name) VALUES (?)");
        $sql->bind_param('s', $name);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>