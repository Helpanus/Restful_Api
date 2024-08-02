<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['product_id']) && isset($_POST['customer_id']) && isset($_POST['qty']) && isset($_POST['tanggal'])){
        $sql = $conn->prepare("INSERT INTO product_keluar (product_id, customer_id, qty, tanggal) VALUES (?, ?, ?, ?)");
        $product_id = $_POST['product_id'];
        $customer_id = $_POST['customer_id'];
        $qty = $_POST['qty'];
        $tanggal = $_POST['tanggal'];
        $sql->bind_param('sssd', $product_id, $customer_id, $qty, $tanggal);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>