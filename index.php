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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=galeri">Galeri </a></li>
                    <li><a href="index.php?page=daftar_klien">Daftar Klien</a></li>
                    <li><a href="index.php?page=kontak">Kontak</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=order_input">Pemesanan</a></li>
                    <li><a href="login.php">Login</a>



                </ul>

            </nav>
            
            <main>
                <?php 
                    
                    if (isset($_GET['page'])){
                       
                        require $_GET['page'] .".php";
                    }
                    else{
                        require "main.php";
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