<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['name'])  && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sql = $conn->prepare("INSERT INTO users (nama, email) VALUES (?, ?)");
        $sql->bind_param('sssd', $name, $email);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>