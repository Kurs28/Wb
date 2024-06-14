<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: admin.php');
    exit;
}

echo 'Selamat datang, ' . $_SESSION['username'];
?>
