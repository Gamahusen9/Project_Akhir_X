<?php 
session_start();    
require 'controller.php';


function inser(){
    global $conn;
    $nama = $_SESSION["userr"];
    $nis =$_SESSION["niss"];
    $password = $_SESSION["passwordd"];
    $no = $_SESSION["nom"];
    $merek =  $_SESSION["merekk"];
    $pesan = $_SESSION["pesann"];

   

    $query = "INSERT INTO pengembalian
            VALUES
            ('',  '$nama', '$nis', '$no', '$merek', '$pesan')
            ";




    // data yang disimpan di $_post masukan ke database

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

   
}

if (inser() > 0) {
    header("Location: pengembalian.php");
}
