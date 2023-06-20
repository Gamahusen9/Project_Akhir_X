<?php
$conn = mysqli_connect("localhost", "root", "", "pplg");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $wadah = [];
    while ($baju = mysqli_fetch_assoc($result)) {
        $wadah[] = $baju;
    }
    return $wadah;
}



function sign($data)
{
    global $conn;

    $nama = $data["nama"];
    $nis = $data["nis"];
    $rombel = $data["rombel"];
    $rayon = $data["rayon"];
    $email = strtolower(stripslashes($data['email']));
    $password = $data['password'];
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);


    $query = " INSERT INTO user
	VALUES
	('','$nama', '$nis', '$rombel', '$rayon','$gambar', '$email','$password')
	";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu!');
                document.location.href= 'tambah.php';
			  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar!');
                document.location.href= 'tambah.php';
			  </script>";
        return false;
    }

    // max 2mb
    if ($ukuranFile > 2000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar!');
                document.location.href= 'tambah.php';
			  </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function update($data){
    global $conn;

    $id = htmlspecialchars($data["id"]);
    $no = htmlspecialchars($data["no"]);
    $nama = htmlspecialchars($data["nama"]);
    $status = htmlspecialchars($data["status"]);
    $kondisi = "digunakan";



    $query = "UPDATE laptop SET
    nama = '$nama',
    no = '$no',
    status = '$status',
    kondisi = '$kondisi'

    WHERE id = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


    




?>