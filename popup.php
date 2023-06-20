<?php
if (!isset($_SESSION["masuk"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,100;1,400&display=swap');

        body {
            background: #525252;
            font-family: Montserrat;
        }

        .container {
            margin-left: 300px;
            background-color: white;
            width: 676px;
            height: 600px;
            border-radius: 10px;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .container h1 {
            position: absolute;
            top: 135px;
            font-size: 40px;
            left: 415px;
            color: #6094E2;
            width: 500px;

        }

        .container p {
            position: absolute;
            top: 250px;
            left: 415px;
            font-size: 23px;
            width: 444px;
            color: #6094E2;
        }

        .container img {
            position: absolute;
            top: 450px;
            left: 600px;
            font-size: 23px;
            color: #6094E2;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Peminjaman Berhasil !!</h1>
        <p align="center">Silahkan tunggu untuk diferifikasi oleh admin. Lalu, ambil barang yang diinginkan! </p>
        <a href="utama.php">
            <img src="img/Group.png" alt="">
        </a>
    </div>
</body>

</html>