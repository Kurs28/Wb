<?php
// Konfigurasi database
$dsn = "mysql:host=localhost;dbname=kontak_kami";
$username = 'root';
$password = '';

// Koneksi ke database
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: '. $e->getMessage();
    exit();
}

// Ambil data pesan dari database
$sql = "SELECT * FROM pesan ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <h1>Pesan Kontak</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
            <tr>
                <td><?php echo htmlspecialchars($message['id']); ?></td>
                <td><?php echo htmlspecialchars($message['name']); ?></td>
                <td><?php echo htmlspecialchars($message['email']); ?></td>
                <td><?php echo htmlspecialchars($message['message']); ?></td>
                <td><?php echo htmlspecialchars($message['created_at']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
