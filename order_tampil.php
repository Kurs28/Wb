    <title>Tampilan Data Order</title>
    <div class="huang">
    <h2>Tampil Data Order</h2>
    <?php 
        require_once "koneksi/koneksi.php";

        $sql = "SELECT * FROM tb_order";
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();  

        $rows = $stmt->fetchAll();
    
    ?>
    <table style border="1px">
        <tr>
            <td>NO</td>
            <td>NAMA</td>
            <td>HP</td>
            <td>PAKET</td>
            <td>TAMBAHAN</td>
            <td>EDIT/HAPUS</td>
        </tr>
    <?php
        foreach ($rows as $r ) {
    ?>
    <tr>
            <td><?php echo $r['order_id'];?></td>
            <td><?php echo $r['order_nama'];?></td>
            <td><?php echo $r['order_hp'];?></td>

            <td><?php echo $r['order_paket'];?></td>

            <td><?php echo $r['order_tambahan'];?></td>
            <td>
                <a href="order_edit.php?order_id=<?php echo $r['order_id'];?>style=text-decoration:none">Edit</a> | 
                <a href="order_hapus.php?order_id=<?php echo $r['order_id'];?>">Hapus</a>
            </td>
            
    </tr>    
            <?php }?>

    </table>
    </div>
