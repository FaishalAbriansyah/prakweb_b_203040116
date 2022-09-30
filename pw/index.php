<?php
require 'functions.php';

$buku = query("SELECT * FROM buku")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK LIBRARY</title>
</head>
<body class="bg-light">
    <h1 class = text-center>Daftar Buku</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <table class="table table-bordered border-warning">
        <tr class = text-center>
            <th>No</th>
            <th>Gambar</th>
            <th>Id_buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($buku as $bk) : ?>
            <tr class = text-center>
                <td><?= $i ?></td>
                <td><img src="image/<?= $bk["gambar"]; ?>" width="80"></td>
                <td><?= $bk["id_buku"]; ?></td>
                <td><?= $bk["judul"]; ?></td>
                <td><?= $bk["pengarang"]; ?></td>
                <td><?= $bk["penerbit"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
</html>