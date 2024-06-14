<?php
require_once "koneksi/koneksi.php";

if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
    $order_nama = $_POST['order_nama'];
    $order_hp = $_POST['order_hp'];
    $order_paket = $_POST['order_paket'];
    $order_tambahan = $_POST['order_tambahan'];

    $sql = "UPDATE tb_order SET order_nama = ?, order_hp = ?, order_paket = ?, order_tambahan = ? WHERE order_id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->execute([$order_nama, $order_hp, $order_paket, $order_tambahan, $order_id]);

    if ($stmt->rowCount() > 0) {
        echo "Data berhasil diupdate";
        header("Location:admin.php?page=order_tampil");
    } else {
        echo "Gagal update data";
    }
} else {
    echo "Tidak ada data yang dikirim";
}
?>