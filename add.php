<?php

if (!empty($_POST)){
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $penulis = $_POST["penulis"];

    include "koneksi.php";
    $query = "INSERT INTO artikel (judul, deskripsi, date, penulis) values ('$judul', '$deskripsi', now(), '$penulis')";

    $eksekusi = mysqli_query($connect, $query);
    if ($eksekusi) {
        header('location: index.php');
    } else{
        echo'menambahkan data gagal';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>add article</title>
</head>
<bod
<div class='center'>
    <div class="border-add">
        <h3 style="text-align: center;">Ubah data peserta PPDB</h3>
        <div class="center">
            <form action="" method="POST">
                <p>Judul</p>
                <input type="text" name="judul" placeholder="Masukkan Judul">
                <p>Deskripsi</p>
                <textarea name="deskripsi" cols="60" rows="6"></textarea>
                <p>Penulis</p>
                <input type="text" name="penulis" placeholder="Nama Penulis">
                <br>
                <a href=""><input type="submit" value="DONE"></a>
            </form>
        </div>
    </div>
</div>

</body>
</html>