<?php
require 'koneksi/koneksimysqli.php';

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data paket wisata dari database
$sql = "SELECT * FROM produk";
$result = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Welcome Traveler</h2>

    <div class="wisata">
        <div class="paket">
            <?php while($row = $result->fetch_assoc()): ?>
            <div class="kartu">
                <img src="upload/<?php echo $row['gambar']; ?>" width="300px" height="300px" alt="">
                <h3><?php echo $row['nama']; ?></h3>
                <p><?php echo $row['deskripsi']; ?></p>
                <p><?php echo $row['durasi']; ?></p>
                <a href="index.php?page=order_input">Pesan Sekarang</a>
            </div>
            <?php endwhile; ?>
        </div>
  

    <div class="video">
        
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/MUH3S6RMgAY" ></iframe>
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/wC8hyxpbMHM" ></iframe>
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/kVxTrhojpFI" ></iframe>
 
    </div>
    </div>

<?php
$koneksi->close();
?>
