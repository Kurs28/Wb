<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Wisata</title>
    <link rel="styelsheet" href="css/style.css">
</head>
<body>
    <h1>Tambah Paket Wisata Baru</h1>
    <form action="insert_paket.php" method="post" enctype="multipart/form-data">
        <label for="name">Nama Paket:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <label for="duration">Durasi:</label>
        <input type="text" id="duration" name="duration" required><br><br>
        <label for="image">Gambar:</label>
        <input type="file" id="image" name="image" required><br><br>
        <button type="submit">Tambah Paket</button>
    </form>
</body>
</html>
