<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Percabangan</h1>
    <h3>IF ELSE</h3>
    <?php
    $nilai = rand(75, 100);
    echo "\$nilai = $nilai <br>";
    if ($nilai >= 80) {
        echo "Nilai anda $nilai dan anda LULUS";
    } else {
        echo "Nilai anda $nilai dan anda TIDAK LULUS";
    }
    ?>
    <h3>Switch</h3>
    <?php
    $nilai = chr(rand(65, 69));
    echo "\$nilai = $nilai <br>";
    switch ($nilai) {
        case 'A':
            echo "Nilai anda sangat baik";
            break;

        case 'B':
            echo "Nilai anda baik";
            break;

        case 'C':
            echo "Nilai anda cukup";
            break;

        default:
            echo "anda tidak LULUS";
            break;
    }
    ?>
    <h1>Perulangan</h1>
    <h3>For</h3>
    <?php
    for ($i = 1; $i <= 100; $i+=3) {
        echo "Perulangan ke-$i <br>";
    }
    ?>
    <h3>While</h3>
    <?php
    $i = 1;
    while ($i <= 10) {
        echo "Perulangan ke-$i <br>";
        $i++;
    }
    ?>

</body>

</html>