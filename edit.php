<?php
include("koneksi.php");
if (! empty($_POST)) {
    $no = $_POST["no"];
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $penulis = $_POST["penulis"];

    $query = "UPDATE artikel SET judul = '$judul', deskripsi = '$deskripsi', penulis = '$penulis' WHERE id = '$no'";
    $eksekusi = mysqli_query($connect, $query);
    if ($eksekusi) {
        header('location:index.php');
    } else {
        echo 'ada data yang salah';
    }
}
$query = "SELECT * FROM artikel WHERE id = $_GET[id]";
$eksekusi = mysqli_query($connect ,$query);
$artikel = mysqli_fetch_assoc($eksekusi);

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
                <input type="hidden" name="no" value="<?= $_GET['id']?>">
                <label>Judul</label>
                <input type="text" name="judul" placeholder="Masukkan Judul" value="<?= $artikel["judul"]?>">
                <br>
                <label>Deskripsi</label>
                <br>
                <textarea name="deskripsi" cols="60" rows="6" value="<?= $artikel['deskripsi']?>"></textarea>
                <br>
                <label>Penulis</label>
                <input type="text" name="penulis" placeholder="Nama Penulis" value="<?= $artikel["penulis"]?>">
                <br>
                <a href=""><input type="submit" value="Ubah Artikel"></a>
            </form>
        </div>
    </div>
</div>

</body>
</html>