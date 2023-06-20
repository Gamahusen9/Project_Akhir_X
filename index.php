<?php
session_start();
if (isset($_SESSION["masuk"])) {
    header("Location: utama.php");
}
require 'controller.php';
if (isset($_POST["submit"])) {
    $cek = $_POST["nis"];
    if (login($_POST) > 0) {
        echo "<script>
        alert('data berhasil dimasukan')
        document.location.href= 'utama.php';
        </script>";
    } else {
        echo "<script>
        alert('harap isi format data diri dengan sesuai !!!')
        document.location.href= 'utama.php';
        </script>";
    }
}
function login($data)
{
    global $conn;


    $gmail = $data["email"];
    $nis = $data["nis"];
    $password = $data["password"];


    $result =   mysqli_query($conn, "SELECT * FROM user 
WHERE
email = '$gmail'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {

            if ($nis === $row["nis"]) {
                
                global $cek;
                $_SESSION["masuk"] = true;
                $_SESSION["nis"] = $cek;
                header("Location: utama.php");
                exit;
            } else {
                echo 'error';
            }
            
        }
    }

    $error = true;
}

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
            height: 800px;
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
            height: 731px;
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
            top: 80px;

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

            margin-top: 200px;
            margin-left: 65px;
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
            height: 40px;

            /* Secondary */

            color: #7E7F80;
        }

        .submit {
            position: absolute;
            width: 193px;
            height: 52px;
            left: 72px;
            top: 480px;
            border: none;
            color: white;
            font-size: 20px;

            background: #525E64;
            box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.13);
            border-radius: 6px;
        }

        .register {
            position: absolute;
            width: 180px;
            height: 52px;
            left: 280px;
            top: 480px;
            border: none;
            color: white;
            font-size: 20px;

            background: #525E64;
            box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.13);
            border-radius: 6px;
        }

        .register:hover {
            background: #D9D9D9;
            color: black;
            transition: 1s;
        }

        .submit:hover {
            background: #D9D9D9;
            color: black;
            transition: 1s;
        }

        .cs {
            display: inline-block;
            position: absolute;
            width: 300px;
            height: 21px;
            left: 70px;
            top: 547px;

            font-size: 18px;
            /* identical to box height */

            letter-spacing: 0.04em;

            color: #7E7F80;
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
            <h1 align="center">Silahkan Login terlebih dahulu</h1>
            <form action="" method="post">

                <label for="" class="labemail">Nis</label>
                <input type="number" name="nis" class="email" placeholder="example 12209xxx">


                <label for="" class="labemail">Email</label>
                <input type="email" name="email" class="email" placeholder="example@gmail.com">

                <label for="" class="labpassword">Password</label>
                <input type="password" name="password" class="password">

                <button type="submit" class="submit" name="submit">Login</button>

                <p class="cs" align="left">Hubungi cs jika bermasalah <a href="https://wa.me/6283804137061">CS</a></p>

            </form>
            <form action="register.php">
                <button type="submit" class="register">Register</button>
            </form>
        </div>
    </div>
</body>

</html>