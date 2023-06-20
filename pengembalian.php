<?php
require 'controller.php';
session_start();
if (!isset($_SESSION["masuk"])) {
    header("Location: index.php");
}
if (isset($_POST["submit"])) {

    $nama = $_POST["user"];
    $_SESSION["niss"] = $_POST["nis"];
    $password = $_POST["password"];
    $_SESSION["nom"] = $_POST["nomor"];
    $_SESSION["merekk"] = $_POST["nama"];
    $_SESSION["pesann"] = $_POST["pesan"];

    $result =   mysqli_query($conn, "SELECT * FROM user 
WHERE
nama = '$nama'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["false"] = false;
            global $nama;
            $_SESSION["userr"] = $nama;
        } else {
            $_SESSION["false"] = true;
        }
    }

    if (up($_POST) > 0) {
        global $nama;
        $_SESSION["nama"] = $nama;
        echo "<script> alert('data berhasil diinput !')
        document.location.href = 'dbinsert.php'
        </script>";
    } else {
        echo "<script> alert('data tidak berhasil di input ! !')
        document.location.href = 'pengembalian.php'
        </script>";
    }
}


function up($data)
{
    global $conn;

    $no = htmlspecialchars($data["nomor"]);
    $nama = htmlspecialchars($data["nama"]);
    $status = "tersedia";
    $kondisi = "baik";
    $id = $no;

    $data = query("SELECT * FROM laptop WHERE no = $no")[0];




    if (
        $_SESSION["false"] > 0
    ) {
        echo "<script>
        alert('password anda salah !!')
        </script>";
    } else {

        if ($data["nama"] != $nama) {
            echo "<script> alert('harap isi format nomor barang dengan nama barang sesuai !')
        document.location.href = 'pengembalian.php'
        </script>";
        }

        if ($data["kondisi"] == "baik") {
            echo "<script> alert('barang sedang tidak digunakan  !')
        document.location.href = 'pengembalian.php'
        </script>";
        }
        if ($data["status"] == "tidak tersedia" && $data["kondisi"] == "rusak") {
            echo "<script> alert('barang sedang tidak digunakan !')
        document.location.href = 'pengembalian.php'
        </script>";
        } else {




            $query = "UPDATE laptop SET
    id = '$no',
    nama = '$nama',
    status = '$status',
    kondisi = '$kondisi'

    WHERE no = '$no'
    ";

            mysqli_query($conn, $query);
            return mysqli_affected_rows($conn);
        }
    }
}
$tampil = $_SESSION["nis"];
$user = query("SELECT * FROM user WHERE nis =$tampil")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        background-size: 2100px;
        background-repeat: no-repeat;
        height: 720px;
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
        width: 600px;
        height: 820px;
        margin-left: 450px;
        margin-top: -200px;
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .content h1 {
        color: black;
        font-size: 37px;
        margin-top: 75px;
        margin-left: 125px;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-top: 75px;
        margin-left: 70px;
    }

    form input {
        width: 450px;
        margin-right: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
        height: 32px;
        background: rgba(255, 255, 255, 0.2);
        border: 0.5px solid black;
    }

    form label {
        font-size: 20px;
        margin-bottom: 5px;
    }

    .pesan {
        width: 450px;
        padding-bottom: 50px;
    }

    button {
        height: 40px;
        border-radius: 10px;
        width: 150px;
        background: rgba(500, 500, 500, 0.2);
        font-size: 20px;
        border: 1px solid black;

    }

    button:hover {
        background: #D9D9D9;
        color: black;
        transition: 1s;
    }
</style>

<body>
    <img style="border-radius: 50px;" src="img/<?= $user["gambar"] ?>" alt="">
    <div class="list">
        <ul type="none">
            <li><a style="text-decoration: none; color:black;" href="utama.php">UTAMA</a></li>
            <li><a style="text-decoration: none;" href="pengembalian.php">PENGEMBALIAN</a></li>
            <li><a style="text-decoration: none;" href="contact.php">CONTACT</a></li>
        </ul>
    </div>
    <div class="listimg">
        <img style="width: 25px; margin-right: 10px;" src="img/home.png" alt="">
        <img style="width: 23px;" src="img/laptop.png" alt="">
        <img style="width: 23px;" src=" img/phone-call.png" alt="">
    </div>

    <div class="content">
        <h1 class="form">Form Pengembalian</h1>
        <form action="" method="post">

            <label for="">Nama</label>
            <input type="text" name="user">

            <label for="">Nis</label>
            <input type="text" name="nis">

            <label for="">Password</label>
            <input type="text" name="password">

            <label for="">No Barang</label>
            <input type="text" name="nomor">

            <label for="">Merek barang </label>
            <input type="text" name="nama">

            <label for="">Pesan </label>
            <input class="pesan" type="text" name="pesan">

            <button type="submit" name="submit">Kirim</button>
        </form>
    </div>
</body>

</html>