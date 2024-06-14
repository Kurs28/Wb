<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Yuk</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
        <div class="container">
            <header>
                <img src="images/kepala.png" alt="">
            </header>

            <nav class="atas">

                <ul>
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="admin.php?page=order_tampil">Tampilan Data Order</a></li>
                    <li><a href="admin.php?page=tambah_paket">Tambah Paket</a>
                    <li><a href="admin.php?page=tampil_pesan">Tampilan Pesan</a></li>
                    <li><a href="admin.php?page=logout">Logout</a>



                </ul>

            </nav>
            
            <main>
                <?php 
                    
                    if (isset($_GET['page'])){
                       
                        require $_GET['page'] .".php";
                    }
                    else{
                        require "main_admin.php";
                    }
                
                
                ?>


            </main>
                <nav class="bawah">

                    


                </nav>
            <footer>

                
                <p>Copyright &copy; 2024. Huang - JWD Juni 2024 UIN Sumatera Utara</p>

            </footer>

        </div>
</body>
</html>