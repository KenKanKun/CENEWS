<?php
    include "koneksi.php";
    $query = "SELECT * FROM artikel";
    $eksekusi = mysqli_query($connect, $query);
    $artikels = mysqli_fetch_all($eksekusi, MYSQLI_ASSOC);
?>

<?php
if (!empty($_GET) && $_GET['aksi'] == "delete") {
    $query="DELETE FROM artikel WHERE id = $_GET[id]";
    $eksekusi = mysqli_query($connect, $query);

    if ($eksekusi) {
        header('location: index.php');
    } else{
        echo'hapus gagal';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cenews</title>
</head>
<body>
    <nav>
        <div class="logo">
            <p>CENEWS</p>
        </div>
        <ul>
            <li><a href="add.php">ADD ARTICLE</a></li>
        </ul>
    </nav>

    <div>
        <div class="center">
            <div class="judul">
                <h2>WELCOME TO MY ARTICLE WEBSITE</h2>
            </div>
        </div>
        <div class="center">
            <div class="judul">
                <p>Tingkatkan Budaya Literasi.</p>
            </div>
        </div>
        <?php
        foreach ( $artikels as $artikel ) {
        ?>
        <div class="center">
            <div class="border">
                <div class="flex">
                    <h2><?= $artikel ['judul']?></h2>
                    <div class="flex">
                        <a href="edit.php?id=<?=$artikel['id']?>">
                            <button type="EDIT">EDIT</button>
                        </a>
                        <a href="?aksi=delete&id=<?=$artikel['id']?>">
                            <button type="DELETE">DELETE</button>
                        </a>
                    </div>
                </div>
                <p><?= $artikel ['deskripsi']?></p>
                <div class="flex">
                    <p class="small-text"> <?= $artikel ['penulis']?></p>
                    <p class="small-text"> <?= $artikel ['date']?></p>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>