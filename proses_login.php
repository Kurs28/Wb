<?php
session_start();
require 'koneksi/config.php';

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Perbaiki query agar sesuai dengan nama parameter yang dibind
    $query = $koneksi->prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
    $query->bindParam(":user", $user);
    $query->bindParam(":pass", $pass);
    
    $query->execute();
    if ($query->rowCount() > 0) {
        $_SESSION['username'] = $user;  // Menggunakan $user karena variabel $username tidak digunakan lagi
        $_SESSION['password'] = $pass;  // Menggunakan $pass karena variabel $password tidak digunakan lagi
        header("Location: admin.php");

    } 
    else {
       header("Location:index.php");
    }
    exit();
}
else{
    echo "Username atau password salah";
}
?>
