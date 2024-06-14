<link rel="stylesheet" href="css/style.css">
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

// Proses form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi input
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all fields';
    } else {
        
        $sql = "INSERT INTO pesan (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            $success = 'Pesan berhasil disimpan!';
        } else {
            $error = 'Gagal menyimpan pesan.';
        }

    }
}

// Tampilkan form atau pesan error/success
if (isset($error)) {
    echo '<p style="color: red;">'. $error. '</p>';
} elseif (isset($success)) {
    echo '<p style="color: green;">'. $success. '</p>';
}
?>
