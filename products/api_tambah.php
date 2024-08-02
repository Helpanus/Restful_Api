<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['category_id']) && isset($_POST['nama']) && isset($_POST['harga']) && isset($_POST['qty'])){
        $nama = $_POST['nama'];
        $sql = $conn->prepare("INSERT INTO products (category_id, nama, harga, qty) VALUES (?, ?, ?, ?)");
        $category_id = $_POST['category_id'];
        $harga = $_POST['harga'];
        $qty = $_POST['qty'];
        $sql->bind_param('sssd', $category_id, $nama, $harga, $qty);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>