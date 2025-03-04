<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nama = "Ultraman";
    $umur = 17;
    $hobi = "Membantu orang lain";

    // echo "tanggal hari ini" . date("d F Y");
    // echo "<br>";
    // echo "Halo, Nama saya $nama, Saya berumur $umur tahun, dan hobbi saya adalah $hobi";
    ?>

    <form action="output.php" method="POST">
        Nama : <input type="text" name="nama" id=""><br>
        Umur : <input type="text" name="umur" id=""><br>
        Hobi : <input type="text" name="hobi" id=""><br>
        <input type="submit" value="kirim">
    </form>

    <br><br>
    
    <?php
     $hari = "senin";
        if ($hari == "senin") {
            echo "Waktunya belajar";
        } else {
            echo "Waktunya berlibur";
        } 
    ?>

    <br><br><br>

    <?php
     for ($i=0; $i < 10; $i++) { 
        echo "ini adalah baris ke $i <br>";
     }
    ?>
</body>

</html>