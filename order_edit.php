<?php
require_once "koneksi/koneksi.php";

if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    $sql = "SELECT * FROM tb_order WHERE order_id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->execute([$order_id]);

    $row = $stmt->fetch();

    if ($row) {
?>      
        <title>Edit Data</title>
        <link rel="stylesheet" href="css/style.css">
        <h2>Edit Data Order</h2>
        <form action="order_update.php" method="post">
            <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="order_nama" value="<?php echo $row['order_nama']; ?>"></td>
                </tr>
                <tr>
                    <td>HP</td>
                    <td><input type="text" name="order_hp" value="<?php echo $row['order_hp']; ?>"></td>
                </tr>
                <tr>
                    <td>Paket</td>
                    <td>
                        <select name="order_paket">
                            <option value="">Silahkan Pilih Paket</option>
                            <?php
                            $paket_options = array("Paket A", "Paket B", "Paket C", "Paket D");
                            foreach ($paket_options as $option) {
                                $selected = ($row['order_paket'] == $option) ? 'selected' : '';
                                echo "<option value='$option' $selected>$option</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                </select>
                </tr>
                <tr>
                    <td>Tambahan</td>
                    <td><input type="text" name="order_tambahan" value="<?php echo $row['order_tambahan']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>

<?php
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "Tidak ada ID yang dipilih";
}
?>