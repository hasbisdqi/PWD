<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contoh 1</h1>
    <?php
    $nama = "Muhammad Hasbi Assidiqi";
    $umur = 2;
    $jenis_kelamin = "Laki-laki";
    $alamat = "Jl. Raya Kedungwuni";
    $kota = "Pekalongan";
    print("Selamat Datang");
    ?>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $umur ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $jenis_kelamin ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><?= $kota ?></td>
        </tr>
    </table>
</body>

</html>