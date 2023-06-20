<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("Location: index.php");
}
require 'controller.php';
$tampil = $_SESSION["nis"];
$user = query("SELECT * FROM user WHERE nis =$tampil")[0];
$lap = query("SELECT * FROM laptop ");
$jumlahRusak = 0;
$jumlahDigunakan = 0;
$jumlahBaik = 0;

foreach ($lap as $laptop) {
    $nomor = $laptop["no"];
    $kondisi = $laptop["kondisi"];

    if ($nomor >= 41 && $nomor <= 60) {


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        width: 1040px;
        height: 550px;
        left: 250px;
        top: 210px;


        background: #F5F8FA;
        box-shadow: 0px 1318px 4px rgba(18, 37, 87, 0.25);
    }


    h1 {
        color: white;
        position: absolute;
        left: 330px;
        font-size: 92px;
    }

    .available {
        position: absolute;
        left: 820px;
        border-radius: 4px;
        top: 70px;
        width: 124px;
        height: 107px;
        background: #EA7A7A;
    }

    .available p {
        position: absolute;
        top: 55px;
        left: 40px;
        display: flex;
        justify-content: center;
    }

    .available h2 {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        font-size: 38px;

    }

    .in {
        position: absolute;
        left: 960px;
        border-radius: 4px;
        top: 70px;
        width: 124px;
        height: 107px;
        background-color: #7FE9D6;
    }

    .in p {
        position: absolute;
        top: 55px;
        left: 23px;
        display: flex;
        justify-content: center;
    }

    .in h2 {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        font-size: 38px;
    }

    .unv {
        position: absolute;
        left: 1100px;
        border-radius: 4px;
        top: 70px;
        width: 124px;
        height: 107px;
        background: #E1E5EE;
    }

    .unv p {
        position: absolute;
        top: 55px;
        left: 45px;
        display: flex;
        justify-content: center;
    }

    .unv h2 {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        font-size: 38px;
    }

    .content .bunglay {
        display: flex;
        flex-wrap: wrap;
        gap: -20px;
        margin-left: 60px;
        margin-top: 50px;
    }

    .content .cardlap {
        width: 199px;
        height: 171px;

        background: #FFFFFF;
        box-shadow: 0px 10px 30px rgba(0, 163, 255, 0.05), 0px 2px 40px rgba(0, 117, 255, 0.1);
        border-radius: 8px;
        margin: 15px;

    }

    .content .rusak {
        width: 199px;
        height: 171px;
        background: red;
        box-shadow: 0px 10px 30px rgba(0, 163, 255, 0.05), 0px 2px 40px rgba(0, 117, 255, 0.1);
        border-radius: 8px;
        margin: 15px;
    }

    .rusak .card p {
        color: white;
    }

    .rusak em {
        width: 200px;
        margin: 2px;
        color: white;
        font-size: 14px;
    }

    .content .digunakan {
        width: 199px;
        height: 171px;
        background: green;
        box-shadow: 0px 10px 30px rgba(0, 163, 255, 0.05), 0px 2px 40px rgba(0, 117, 255, 0.1);
        border-radius: 8px;
        margin: 15px;
    }

    .digunakan .card p {
        color: white;
    }

    .digunakan em {
        width: 200px;
        margin: 2px;
        color: white;
        font-size: 14px;
    }

    .card img {
        width: 62px;
        margin-top: 20px;
        margin-left: 70px;
    }

    .card p {
        margin: 2px;
        color: #787878;
        font-size: 14px;
    }

    .card .text {
        margin-top: 16px;
        margin-left: 13px;
        letter-spacing: 0.07em;
    }

    button {
        position: absolute;
        left: 68px;
        bottom: 30px;
        width: 181px;
        height: 35px;
        font-size: 22px;
        border: none;
        color: #7394C6;
        ;
        background: #FFFFFF;
        box-shadow: 0px 10px 14px rgba(43, 50, 219, 0.1);
        border-radius: 8px;
    }


    button a {
        color: #7394C6;
    }

    .kembali {
        position: absolute;
        left: 280px;
        bottom: 30px;
        width: 181px;
        height: 35px;
        font-size: 22px;
        border: none;
        color: #7394C6;
        ;
        background: #FFFFFF;
        box-shadow: 0px 10px 14px rgba(43, 50, 219, 0.1);
        border-radius: 8px;
    }


    .kembali a {
        color: #7394C6;
    }

    .keterangan {
        display: flex;
        justify-content: center;
    }

    .img {
        margin: 50px;
        width: 900px;
    }

    .usimg {
        border-radius: 50px;
    }
</style>

<body>
    <div class="content">
        <div class="bunglay">
            <?php
            foreach ($lap as $laptop) {
                $nomor = $laptop["no"];
                $kondisi = $laptop["kondisi"];
                if ($nomor >= 49) {
                    if ($nomor <= 56) {
                        if ($kondisi == "rusak") {
            ?>
                            <div class="rusak">
                                <div class="card">
                                    <img src="img/20230618_153914.png" alt="">
                                    <div class="text">
                                        <em>no hp : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?= $laptop["no"] ?></em>
                                        <em>Status : &nbsp; TidakTersedia</em>
                                        <em>Kondisi : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<?= $laptop["kondisi"] ?></em>
                                    </div>
                                </div>
                            </div>

                        <?php } elseif ($kondisi == "digunakan") { ?>
                            <div class="digunakan">
                                <div class="card">
                                    <img src="img/20230618_153914.png" alt="">
                                    <div class="text">
                                        <em>no hp : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?= $laptop["no"] ?></em>
                                        <em>Status :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?= $laptop["status"] ?></em>
                                        <em>Kondisi : &nbsp; &nbsp; &nbsp; <?= $laptop["kondisi"] ?></em>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a style="text-decoration: none;" href="konfirmasi.php?id=<?= $laptop["id"] ?>">
                                <div class="cardlap">
                                    <div class="card">
                                        <img src="img/handphone.png" alt="">
                                        <div class="text">
                                            <p>no hp : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?= $laptop["no"] ?></p>
                                            <p>Status : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?= $laptop["status"] ?></p>
                                            <p>Kondisi : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<?= $laptop["kondisi"] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
            <?php }
                    }
                }
            }
            ?>
        </div>
        <button class="kembali"><a style="text-decoration: none;" href="hp.php">Kembali</a></button>
        <button><a style="text-decoration: none;" href="hp3.php">selanjutnya</a></button>

    </div>
    <h1>
        Hp
    </h1>
    <div class="available">
        <h2><?php echo $jumlahRusak;  ?></h2>
        <p>Rusak</p>
    </div>
    <div class="in">
        <h2><?php echo $jumlahDigunakan; ?></h2>
        <p>Digunakan</p>

    </div>

    <div class="unv">
        <h2><?php echo $jumlahBaik; ?></h2>
        <p>Baik</p>
    </div>
    <div class="container">

        <div class="nav">
            <img class="usimg" src="img/<?= $user["gambar"] ?>" alt="">
            <div class="listimg">
                <img style="width: 25px; margin-right: 10px;" src="img/home.png" alt="">
                <img style="width: 23px;" src=" img/laptop.png" alt="">
                <img style="width: 23px;" src=" img/phone-call.png" alt="">
            </div>
            <div class="list">
                <ul type="none">
                    <li><a style="text-decoration: none; color:black;" href="utama.php">UTAMA</a></li>
                    <li><a style="text-decoration: none;" href="pengembalian.php">PENGEMBALIAN</a></li>
                    <li><a style="text-decoration: none;" href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>

    </div>
</body>

</html>