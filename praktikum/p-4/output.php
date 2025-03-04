<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $hobi = $_POST['hobi'];

        echo "tanggal hari ini " . date("d F Y");
        echo "<br>";
        echo "Halo, Nama saya $nama, Saya berumur $umur tahun, dan hobbi saya adalah $hobi";
    ;?>
</body>
</html>