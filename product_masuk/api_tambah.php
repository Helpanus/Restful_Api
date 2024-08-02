<?php
    require_once('../config/koneksi_db.php');
    if (isset($_POST['product_id']) && isset($_POST['supplier_id']) && isset($_POST['qty']) && isset($_POST['tanggal'])){
        $sql = $conn->prepare("INSERT INTO product_masuk (product_id, supplier_id, qty, tanggal) VALUES (?, ?, ?, ?)");
        $product_id = $_POST['product_id'];
        $supplier_id = $_POST['supplier_id'];
        $qty = $_POST['qty'];
        $tanggal = $_POST['tanggal'];
        $sql->bind_param('sssd', $product_id, $supplier_id, $qty, $tanggal);
        $sql->execute();
        if ($sql) {
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo "GAGAL";
        }
    }
?>