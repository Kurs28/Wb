<?php
    require 'koneksi/koneksimysqli.php';
// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil ID dari URL
$id = $_GET['id'];

// Hapus data paket dari database
$sql = "DELETE FROM produk WHERE id = $id";

if ($koneksi->query($sql) === TRUE) {
    echo "Paket berhasil dihapus.";
    header ("Location:admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
