<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("Location: index.php");
}
require 'controller.php';
$tampil = $_SESSION["nis"];
$user = query("SELECT * FROM user WHERE nis =$tampil")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-size: 1500px;
            background-repeat: no-repeat;
        }


        .nav {
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
            width: 953px;
            height: 467px;
            left: 282px;
            top: 100px;

            background: linear-gradient(101.88deg, rgba(255, 255, 255, 0.56) 4.05%, rgba(255, 255, 255, 0.56) 48.89%, rgba(255, 255, 255, 0.56) 98.35%);
            box-shadow: 0px 4px 30px rgba(23, 41, 53, 0.25);
            border-radius: 9px;
        }


        h1 {
            position: absolute;
            width: 520px;
            height: 47px;
            left: 50px;
            top: 20px;

            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 44px;

            color: #585E97;
        }

        hr {
            position: absolute;
            width: 543px;
            height: 0px;
            left: 50px;
            top: 150px;

            border: 3px solid #8087C6;
        }

        p {
            position: absolute;
            width: 340px;
            height: 53px;
            left: 50px;
            top: 160px;

            font-style: normal;
            font-weight: 400;
            font-size: 23px;
            line-height: 28px;

            color: #4D6D8A;
        }

        .content .card {
            position: absolute;
            width: 550.83px;
            height: 138.8px;
            left: 50px;
            top: 300px;

            background: #FFFFFF;
            box-shadow: 0px 2px 27px rgba(42, 60, 72, 0.13);
            border-radius: 4px;
        }

        h3 {
            position: absolute;
            width: 203px;
            height: 34px;
            left: 30px;
            margin-bottom: 30px;
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 30px;
            letter-spacing: 0.08em;

            color: #787878;
        }

        .no {
            position: absolute;
            top: 70px;
            left: 20px;
            width: 300px;
            height: 40px;
            background-color: white;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            color: black;
        }

        .no p {
            position: absolute;
            top: -13px;
            left: 20px;
            font-size: 18px;
            letter-spacing: 0.07em;
        }

        button {
            position: absolute;
            right: 100px;
            top: 70px;
            width: 130px;
            height: 40px;
            font-size: 20px;
            border: none;
            color: white;
            background-color: #373B61;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
            border-radius: 2px;
        }

        .content img {
            position: absolute;
            width: 300px;
            right: 20px;
            bottom: 20px;
        }

        .container {
            margin-bottom: 500px;
        }

        .usimg {
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="nav">
            <img class="usimg" src="img/<?= $user["gambar"] ?>" alt="">
            <div class="listimg">
                <img style="width: 25px; margin-right: 10px;" src="img/home.png" alt="">
                <img style="width: 23px;" src="IMG/laptop (1).png" alt="">
                <img style="width: 23px;" src=" img/telephone-call.png" alt="">
            </div>
            <div class="list">
                <ul type="none">
                    <li><a style="text-decoration: none; color:black;" href="utama.php">UTAMA</a></li>
                    <li><a style="text-decoration: none;" href="pengembalian.php">PENGEMBALIAN</a></li>
                    <li><a style="text-decoration: none; color:black;" href="utama.php">CONTACT</a></< /li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>
                Kontak CS Untuk Informasi Lebih Lanjut
            </h1>
            <p>Bila Memiliki Masalah, Keluhan, Pertanyaan. Silahkan Hubungi Nomer Berikut</p>
            <hr>
            <img src="img/Logo-orang.png" alt="">
            <div class="card">
                <h3>Hubungi CS</h3>
                <div class="no">
                    <p>WA: 083804137061</p>
                </div>
                <button>
                    <a style="text-decoration: none; color:white; letter-spacing:0.07em;" href="https://wa.me/6283804137061">Hubungi</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>