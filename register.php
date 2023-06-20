<?php
session_start();
require 'controller.php';
if (isset($_POST['submit'])) {
    if (sign($_POST) > 0) {

        echo "
        <script>
        alert('data berhasil dimasukan')
        document.location.href= 'index.php';
        </script>
        ";
    } else {
        mysqli_error($conn);
    }
};
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
            background-size: cover;
            width: 100px;
            height: 900px;
        }

        .container {
            display: flex;
            justify-content: space-around;
        }

        .container .text {
            display: block;
            margin-right: 200px;
            row-gap: -5px;
            position: absolute;
            top: 150px;
            left: 50px;
            font-size: 25px;
            color: white;
        }

        .container .card {
            position: absolute;
            width: 512px;
            height: 820px;
            left: 710px;
            top: 62px;

            background: #FFFFFF;
            box-shadow: 0px 2px 40px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .card h1 {
            position: absolute;
            width: 345px;
            height: 72px;
            left: 100px;
            top: 10px;

            font-size: 32px;
            line-height: 112%;
            letter-spacing: 0.07em;
            /* or 36px */


            color: #716B6B;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;

            margin-top: 140px;
            margin-left: 60px;
        }

        form label {
            width: 72px;
            height: 16px;
            font-size: 18px;
            line-height: 23px;
            letter-spacing: 0.04em;

            /* Secondary */

            color: #7E7F80;
        }

        form input {
            font-size: 18px;
            line-height: 23px;
            letter-spacing: 0.04em;
            border: none;
            font-size: 15px;
            color: #7E7F80;
            letter-spacing: 0.07em;
            padding-left: 20px;

            background: #D9D9D9;
            box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.08);
            border-radius: 6px;
            width: 368px;
            height: 35px;

            /* Secondary */

            color: #7E7F80;
        }

        .submit {
            position: absolute;
            width: 193px;
            height: 52px;
            left: 60px;
            top: 745px;
            border: none;
            color: white;
            font-size: 20px;

            background: #525E64;
            box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.13);
            border-radius: 6px;
        }


        .submit:hover {
            background: #D9D9D9;
            color: black;
            transition: 1s;
        }

        .cs {
            position: absolute;
            width: 179px;
            height: 52px;
            left: 270px;
            top: 745px;
            border: none;
            color: white;
            font-size: 20px;


            background: #525E64;
            box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.13);
            border-radius: 6px;
        }

        .cs:hover {
            background: #D9D9D9;
            color: black;
            transition: 1s;
        }

        .cs a{
            color: white;
        }

        .cs a:hover {
            background: #D9D9D9;
            color: black;
            transition: 1s;

        }
        </style>
</head>

<body>
    <div class="container">
        <div class="text">
            <h1>We Lend</h1>
            <h3>Peminjaman Menjadi Lebih Mudah</h3>
        </div>
        <div class="card">
            <h1 align="center">Silahkan Register terlebih dahulu</h1>
            <form action="" method="post" enctype="multipart/form-data">

                <label for="" class="labnama">Nama</label>
                <input type="text" name="nama" class="nama" placeholder="username">

                <label for="" class="labnis">Nis</label>
                <input type="number" name="nis" class="email" placeholder="122xxxxx">

                <label for="" class="labnama">Rombel</label>
                <input type="text" name="rombel" class="nama" placeholder="Rombel">

                <label for="" class="labemail">Rayon</label>
                <input type="text" name="rayon" class="email" placeholder="Rayon">

                <label for="" class="labemail">Email</label>
                <input type="email" name="email" class="email" placeholder="example@gmail.com">

                <label for="" class="labpassword">Password</label>
                <input type="password" name="password" class="password">

                <label for="" class="labpassword">Gambar</label>
                <input type="file" name="gambar" class="password">

                <button type="submit" class="submit" name="submit">Registrasi</button>

                <button class="cs"><a style="text-decoration: none; " href="index.php">Login</a></button>
            </form>
        </div>
    </div>
</body>

</html>