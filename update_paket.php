<?php
    require 'koneksi/koneksimysqli.php';
// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari formulir
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$duration = $_POST['duration'];

// Update data paket
if ($_FILES['image']['name']) {
    $image = $_FILES['image']['name'];
    $target = "upload/" . basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $sql = "UPDATE produk SET nama='$name', deskripsi='$description', durasi='$duration', gambar='$image' WHERE id=$id";
} else {
    $sql = "UPDATE produk SET nama='$name', deskripsi='$description', durasi='$duration' WHERE id=$id";
}

if ($koneksi->query($sql) === TRUE) {
    echo "Paket berhasil diupdate.";
    header ("Location:admin.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
