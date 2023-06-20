<?php 
session_start();    
require 'controller.php';


function insertkem(){
    global $conn;
    $id = $_SESSION["id"];
    $pesan = $_SESSION["pesan"];
    $kembali = query("SELECT * FROM laptop WHERE id = $id")[0];
    $nama = $kembali["nama"];
    $no = $kembali["no"];
    $query = "INSERT INTO peminjaman
            VALUES
            ('',  '$nama', '$no', '$pesan')
            ";




    // data yang disimpan di $_post masukan ke database

    mysqli_query($conn, $query);

    // yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
    return mysqli_affected_rows($conn);
}

if (insertkem() > 0) {
    header("Location: popup.php");
}



?>