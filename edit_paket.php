<?php
require 'koneksi/koneksimysqli.php';
// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data paket berdasarkan ID
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = $id";
$result = $koneksi->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Wisata</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Edit Paket Wisata</h1>
    <form action="update_paket.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Nama Paket:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['nama']; ?>" required><br><br>
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required><?php echo $row['deskripsi']; ?></textarea><br><br>
        <label for="duration">Durasi:</label>
        <input type="text" id="duration" name="duration" value="<?php echo $row['durasi']; ?>" required><br><br>
        <label for="image">Gambar:</label>
        <input type="file" id="image" name="image"><br><br>
        <button type="submit">Update Paket</button>
    </form>
</body>
</html>

<?php
$koneksi->close();
?>
