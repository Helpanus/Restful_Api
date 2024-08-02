<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['email']) && isset($_POST['telepon'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $sql = $conn->prepare("INSERT INTO suppliers (nama, alamat, email, telepon) VALUES (?, ?, ?, ?)");
        $telepon = $_POST['telepon'];
        $sql->bind_param('sssd', $nama, $alamat, $email, $telepon);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>