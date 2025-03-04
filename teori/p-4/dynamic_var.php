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
    // ?nama=Muhammad%20Hasbi%20Assidiqi&umur=2&jenis_kelamin=Laki-laki&alamat=Jl.%20Raya%20Kedungwuni&kota=Pekalongan
    $nama = $_POST['name'];
    $umur = $_POST['age'];
    $jenis_kelamin = $_POST['sex'];
    $alamat = $_POST['address'];
    $kota = $_POST['city'];
    print("Selamat Datang");
    // 15 - 20
    // 21 - 45
    // > 45
    $kategori_umur = "";
    if ($umur < 15) {
        $kategori_umur = "Anak - Anak";
    } else if ($umur >= 15 && $umur <= 20) {
        $kategori_umur = "Remaja";
    } else if ($umur > 20 && $umur <= 45) {
        $kategori_umur = "Dewasa";
    } else {
        $kategori_umur = "Lansia";
    }
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
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td><?= $kategori_umur ?></td>
        </tr>
    </table>
</body>

</html>