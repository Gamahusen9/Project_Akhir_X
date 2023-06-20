<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("Location: index.php");
}

require 'controller.php';

$tampil = $_SESSION["nis"];

$user = query("SELECT * FROM user WHERE nis =$tampil")[0];

$laptop = query("SELECT * FROM laptop ");




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOC</title>
</head>
<style>
    * {
        font-family: Pangram-ExtraLight;
    }

    @font-face {
        font-family: Pangram-ExtraLight;
        src: url(font/PangramSans-FreeForPersonalUse/Pangram-FullFamily-FreeForPersonalUse/Pangram-Regular.otf);
    }

    body {
        background-image: url(img/Login-bg.png);
        background-position: 250px -300px;
        background-repeat: no-repeat;
    }

    .nav {
        width: 100px;
        position: static;
        display: flex;
        flex-direction: column;

    }

    img {
        width: 100px;
        margin-top: 20px;
        margin-left: 60px;
    }

    .list {
        position: absolute;
        top: 125px;
        padding-top: 30px;
        padding-left: 20px;
    }

    li {
        padding-top: 32px;
        padding-left: 10px;
        font-size: 14px;
        letter-spacing: 0.07em;
    }

    .listimg {
        position: absolute;
        top: 168px;
        left: -40px;
        display: flex;
        flex-direction: column;


    }

    .listimg img {
        padding-top: 7px;
        width: 20px;

    }

    a {
        color: black;
    }

    .content {
        position: absolute;
        width: 1064px;
        height: 600px;
        left: 250px;
        top: 210px;


        background: #F5F8FA;
        box-shadow: 0px 1318px 4px rgba(18, 37, 87, 0.25);
    }

    .conimg {
        margin-top: 30px;
        margin-left: 25px;
        display: flex;
        width: 500px;

    }

    .conimg img {
        margin-left: 20px;
        width: 220px;
        border-radius: 10px;
        transition: scale 400ms;
        box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.25);
    }

    .conimg img:hover {
        scale: 110%;
        
    }

    .content .pin {
        margin: 50px;
        color: #576A80;
        font-size: 40px;

    }

    hr {
        width: 1000px;
        height: 0px;


        border: 1.9px solid #717A9A;
    }

    .text {
        position: absolute;
        margin-left: 300px;
        color: white;
        letter-spacing: 0.07em;
    }

    .text p {
        font-size: 20px;
        margin: 5px;
    }

    .text h1 {
        margin: 0;
        font-size: 60px;
        width: 500px;
    }

    .lap {
        position: absolute;
    }

    .lenovo {
        color: white;
        margin-left: 60px;
        margin-top: 60px;
        width: 120px;
        letter-spacing: 0.07em;
    }

    .lenovo p {
        font-size: 23px;
        margin: 0;
        width: 200px;
    }

    .lenovo h1 {
        margin-bottom: 170px;
        font-size: 35px;
    }

    .acer {
        color: white;
        margin-left: 300px;
        width: 120px;
        position: absolute;
        top: 40px;
        letter-spacing: 0.07em;

    }

    .acer h1 {
        font-size: 35px;
        margin-bottom: 165px;
    }

    .acer p {
        font-size: 23px;
        margin: 0;
        width: 200px;

    }

    .hp {
        color: white;
        margin-left: 540px;
        width: 120px;
        position: absolute;
        top: 40px;
        letter-spacing: 0.07em;

    }

    .hp h1 {
        font-size: 35px;
        margin-bottom: 165px;
    }

    .hp p {
        font-size: 23px;
        margin: 0;
        width: 200px;

    }

    .lainnya {
        position: absolute;
        margin-left: 850px;
        top: 40px;
        color: white;
    }

    .logout2 {
        position: absolute;
        top: 600px;
    }

    .logout {
        margin-top: 395px;
        margin-left: 70px;
    }
</style>

<body>

    <div class="text">
        <p>Selamat Datang</p>
        <h1><?= $user["nama"]; ?></h1>
        <p><?= $user["rombel"] ?> - <?= $user["rayon"] ?> - <?= $user["nis"] ?></p>
    </div>
    <div class="nav">
        <img style="border-radius: 50px;" src="img/<?= $user["gambar"] ?>" alt="">
        <div class="listimg">
            <img style="width: 25px; margin-right: 10px;" src="img/home (1).png" alt="">
            <img style="width: 23px;" src="img/laptop (1).png" alt="">
            <img style="width: 23px;" src=" img/phone-call.png" alt="">

            <img class="logout" style="width: 23px;" src="img/logout.png" alt="">
        </div>
        <div class="content">
            <h1 class="pin">Pinjam Apa Hari Ini ?</h1>
            <div class="lap">
                <?php
                $jumlahRusak = 0;
                $jumlahDigunakan = 0;
                $jumlahBaik = 0;
                foreach ($laptop as $lap) {
                    $nomor = $lap["no"];
                    $kondisi = $lap["kondisi"];

                    if ($nomor <= 20) {


                        if ($kondisi == "rusak") {
                            // Jika laptop rusak
                            $jumlahRusak++;
                            // ...
                        } elseif ($kondisi == "digunakan") {
                            // Jika laptop digunakan
                            $jumlahDigunakan++;
                            // ...
                        } else {
                            // Jika laptop dalam kondisi baik
                            $jumlahBaik++;
                            // ...
                        }
                    }
                }
                ?>
                <div class="lenovo">
                    <h1>Laptop Lenovo</h1>
                    <p>Tersedia: &nbsp; <?php echo $jumlahBaik ?> </p>
                    <p>Digunakan: &nbsp; <?php echo $jumlahDigunakan ?> </p>

                    <?php
                    $jumlahRusak = 0;
                    $jumlahDigunakan = 0;
                    $jumlahBaik = 0;
                    foreach ($laptop as $lap) {
                        $nomor = $lap["no"];
                        $kondisi = $lap["kondisi"];

                        if ($nomor >= 21 && $nomor <= 40) {


                            if ($kondisi == "rusak") {
                                // Jika laptop rusak
                                $jumlahRusak++;
                                // ...
                            } elseif ($kondisi == "digunakan") {
                                // Jika laptop digunakan
                                $jumlahDigunakan++;
                                // ...
                            } else {
                                // Jika laptop dalam kondisi baik
                                $jumlahBaik++;
                                // ...
                            }
                        }
                    }
                    ?>
                </div>
                <div class="acer">
                    <h1>Laptop Acer</h1>
                    <p>Tersedia: &nbsp; <?php echo $jumlahBaik ?> </p>
                    <p>Digunakan: &nbsp; <?php echo $jumlahDigunakan ?> </p>
                </div>
                <div class="hp">
                    <?php
                    $jumlahRusak = 0;
                    $jumlahDigunakan = 0;
                    $jumlahBaik = 0;
                    foreach ($laptop as $lap) {
                        $nomor = $lap["no"];
                        $kondisi = $lap["kondisi"];

                        if ($nomor >= 40 && $nomor <= 60) {


                            if ($kondisi == "rusak") {
                                // Jika laptop rusak
                                $jumlahRusak++;
                                // ...
                            } elseif ($kondisi == "digunakan") {
                                // Jika laptop digunakan
                                $jumlahDigunakan++;
                                // ...
                            } else {
                                // Jika laptop dalam kondisi baik
                                $jumlahBaik++;
                                // ...
                            }
                        }
                    }
                    ?>
                    <h1>HP Iphone</h1>
                    <p>Tersedia: &nbsp; <?php echo $jumlahBaik; ?></p>
                    <p>Digunakan: &nbsp; <?php echo $jumlahDigunakan; ?></p>
                </div>

                <div class="lainnya">
                    <h1>Lainnya</h1>
                </div>

            </div>
            <hr>
            <div class="conimg">
                <a href="lenovo.php">
                    <div class="img">
                        <img src="img/kari-shea-1SAnrIxw5OY-unsplash 1.png" alt="">
                    </div>
                </a>
                <a href="acer.php">
                    <div class="img">
                        <img src="img/screen-post-Fhhip1_P3fA-unsplash 1.png" alt="">
                    </div>
                </a>
                <a href="hp.php">
                    <div class="img">
                        <img src="img/sama-hosseini-hLPVT6Ll6W4-unsplash 1.png" alt="">
                    </div>
                </a>
                <a href="lainnya.php">
                    <div class="img">
                        <img src="img/screen-post-Fhhip1_P3fA-unsplash 1.png" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="list">
            <ul type="none">
                <li><a style="text-decoration: none; color:black;" href="utama.php">UTAMA</a></li>
                <li><a style="text-decoration: none;" href="pengembalian.php">PENGEMBALIAN</a></li>
                <li><a style="text-decoration: none;" href="contact.php">CONTACT</a></li>
                <?php
                ?>

                <li><a class="logout2" style="text-decoration: none;" href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</body>

</html>