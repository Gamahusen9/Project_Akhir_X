<?php
session_start();
if (!isset($_SESSION["masuk"])) {
    header("Location: index.php");
}
require 'controller.php';

$id = $_GET["id"];
$laptop = query("SELECT * FROM laptop WHERE id=$id")[0];
if (isset($_POST["submit"])) {
    $_SESSION["id"] = $id;
    $_SESSION["pesan"] = $_POST["pesan"];
    if (update($_POST) > 0) {
        echo "<script> alert('data berhasil diinput')
        document.location.href = 'insertdb.php'
        </script>";
    } else {
        echo "<script> alert('data tidak berhasil diinput')
        document.location.href = 'konfirmasi.php'
        </script>";
    }
}
if ($laptop["nama"] == "iphone") {
    $_SESSION["true"] = 1;
}elseif ($laptop["nama"] == "samsung") {
    $_SESSION["true"] = 1;
} else {
    $_SESSION["true"] = 0;
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
            margin-bottom: 100px;
        }

        .com {
            position: absolute;
            top: 30px;
            left: 350px;
            width: 43px;
        }

        .comm {
            position: absolute;
            top: 22px;
            left: 348px;
        }

        .container h1 {
            position: absolute;
            top: 40px;
            left: 350px;
            width: 500px;
            letter-spacing: 0.03em;
            color: #6094E2;
            font-size: 35px;

        }

        hr {
            position: absolute;
            width: 580px;
            height: 0px;
            left: 350px;
            top: 130px;

            border: 1.5px solid #8087C6;
        }

        .lap {
            position: absolute;
            top: 170px;
            left: 340px;
            width: 88px;
        }

        .container .textlap {
            position: absolute;
            top: 160px;
            left: 450px;
            color: #6094E2;
            letter-spacing: 0.07em;
            width: 700px;

        }

        .keperluan {
            width: 300px;
            position: absolute;
            top: 260px;
            color: #6094E2;
            letter-spacing: 0.03rem;
            left: 340px;
        }

        .keperluan h3 {
            font-size: 23px;
        }

        .keperluan em {
            position: absolute;
            padding-top: 0;
            top: 55px;
            font-size: 12px;
        }

        input {
            margin-left: 8px;
            margin-top: 13px;
            width: 580px;
            padding-bottom: 150px;
            padding-left: 10px;
            padding-top: 15px;
            background: #FFFFFF;
            box-shadow: 0px -2px 13px rgba(44, 78, 200, 0.05), 0px 2px 13px rgba(44, 78, 200, 0.05);
            border-radius: 10px;
            border: none;
            color: #6094E2;
            font-size: 15px;
        }

        ::-webkit-input-placeholder {
            color: #6094E2;
            letter-spacing: 0.03em;
        }

        input:focus {
            outline: none !important;
            border-color: #6094E2;
            box-shadow: 0 0 10px #6094E2;
        }

        button {
            position: absolute;
            width: 181px;
            margin-top: 20px;
            height: 30px;
            font-size: 15px;
            border: none;
            color: #7394C6;
            ;
            background: #FFFFFF;
            box-shadow: 0px 10px 14px rgba(43, 50, 219, 0.1);
            border-radius: 3px;
        }

        .container2 {
            margin-left: 300px;
            background-color: white;
            width: 676px;
            height: 600px;
            border-radius: 10px;
            margin-bottom: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="utama.php">
            <img class="comm" src="img/comm.png" alt="">
            <img class="com" src="img/com.png" alt="">
        </a>
        <h1>Konfirmasi Peminjaman </h1>
        <hr>
        <?php if ($_SESSION["true"] == 1) { ?>
            <img class="lap" src="img/20230619_181849.png" alt="" class="lap">
        <?php } else { ?>
            <img class="lap" src="img/Laptop vector.png" alt="">
        <?php } ?>
    
        <div class="textlap">
            <p> <?= $laptop["nama"]; ?></p>
            <p>No: <?= $laptop["id"] ?></p>
            <p>Tanggal: <?php echo date('d-m-Y'); ?></p>
        </div>
        <div class="keperluan">
            <h3>Keperluan : </h3>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $laptop["id"] ?>">
                <input type="hidden" name="no" value="<?= $laptop["no"] ?>">
                <input type="hidden" name="nama" value="<?= $laptop["nama"] ?>">
                <input type="hidden" name="status" value="<?= $laptop["status"] ?>">
                <input type="hidden" name="kondisi" value="<?= $laptop["kondisi"] ?>">
                <em>*Max 50 karakter</em>
                <input type="text" placeholder="Ketikkan Pesan Disini..." maxlength="50" name="pesan">
                <button type="submit" name="submit" id="click">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>l