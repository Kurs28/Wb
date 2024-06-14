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
    <h2>Welcome Admin</h2>

    <div class="wisata">
        <div class="paket">
            <?php while($row = $result->fetch_assoc()): ?>
            <div class="kartu">
                <img src="upload/<?php echo $row['gambar']; ?>" width="300px" height="300px" alt="">
                <h3><?php echo $row['nama']; ?></h3>
                <p><?php echo $row['deskripsi']; ?></p>
                <p><?php echo $row['durasi']; ?></p>
                <a href="index.php?page=order_input">Pesan Sekarang</a>
                <a href="edit_paket.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="hapus_paket.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus paket ini?')">Hapus</a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

</body>
</html>

<?php
$koneksi->close();
?>
