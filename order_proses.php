<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROSES</title>
</head>
<body>
    <h1>Data Berhasil Dimasukkan</h1>
    
<?php 

require_once "koneksi/koneksi.php";
if (isset($_POST['b_simpan'])){
    $order_nama = $_POST['order_nama'];
    $order_hp = $_POST['order_hp'];
    $order_paket = $_POST['order_paket'];
    $order_tambahan = $_POST['order_tambahan'];

    $sql = "INSERT INTO tb_order SET
    order_nama=:order_nama, order_hp=:order_hp,
    order_paket=:order_paket,order_tambahan=:order_tambahan";
    
    $stmt = $koneksi->prepare($sql);

    $stmt->bindParam(":order_nama", $order_nama); 
    $stmt->bindParam(":order_hp", $order_hp); 
    $stmt->bindParam("order_paket", $order_paket);
    $stmt->bindParam("order_tambahan", $order_tambahan);
    

    $stmt->execute();
}
header("location:index.php")
?>

</body>
</html>
