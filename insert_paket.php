<?php
require_once 'koneksi/koneksimysqli.php';

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$image = $_FILES['image']['name'];
$target = "upload/" . basename($image);

// Simpan data ke database
$sql = "INSERT INTO produk (nama, deskripsi, durasi, gambar) VALUES ('$name', '$description', '$duration', '$image')";

if ($koneksi->query($sql) === TRUE) {
    // Pindahkan gambar ke folder tujuan
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "Paket berhasil ditambahkan.";
        header ("Location:admin.php");
    } else {
        echo "Gagal mengunggah gambar.";
    }
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
