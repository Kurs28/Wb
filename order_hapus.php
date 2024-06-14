<?php
require_once "koneksi/koneksi.php";

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    $sql = "DELETE FROM tb_order WHERE order_id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->execute([$order_id]);

    if ($stmt->rowCount() > 0) {
        echo "Data berhasil dihapus";
        header("Location: admin.php");
    } else {
        echo "Gagal hapus data";
    }
} else {
    echo "Tidak ada ID yang dipilih";
}
?>