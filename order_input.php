    <title>Order</title>
    <h2>Input Data Order</h2>
    <form action="order_proses.php" method="post">
        <div class="juan">
            <div class="huang">
                <table>
                    <tr>
                        <td>NAMA</td>
                        <td><input type="text" name="order_nama" required></td>
                    </tr>
                    <tr>
                        <td>HP</td>
                        <td><input type="text" name="order_hp" required></td>
                    </tr>

                    <tr>
                        <td>PAKET</td>
                        <td><select name="order_paket" required>
                                <option value="">Silahkan Pilih Paket</option>
                                <option value="Paket A">Paket A</option>
                                <option value="Paket B">Paket B</option>
                                <option value="Paket C">Paket C</option>
                                <option value="Paket D">Paket D</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>ORDER TAMBAHAN</td>
                        <td><input type="text" name="order_tambahan" required></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="b_simpan" value="Simpan"></td>
                    </tr>

                </table>
    </form>
    </div>
    </div>