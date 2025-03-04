<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $bil1 = isset($_GET['bil1']) ? $_GET['bil1'] : false;
    $bil2 = isset($_GET['bil2']) ? $_GET['bil2'] : false;
    $op = isset($_GET['op']) ? $_GET['op'] : false;
    $hasil = "";
    if (is_numeric($bil1) && is_numeric($bil2) && $op) {
        if ($op == "tambah") {
            $hasil = "Hasil dari $bil1 + $bil2 adalah " . $bil1 + $bil2;
        } else if ($op == "kurang") {
            $hasil = "Hasil dari $bil1 - $bil2 adalah " . $bil1 - $bil2;
        } else if ($op == "kali") {
            $hasil = "Hasil dari $bil1 * $bil2 adalah " . $bil1 * $bil2;
        } else if ($op == "bagi") {
            $hasil = "Hasil dari $bil1 / $bil2 adalah " . $bil1 / $bil2;
        }
    } else {
        $hasil = "Ada yang belum di isi anjay";
    }

    ?>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <?= $hasil ?>
        </div>
    </div>
</body>

</html>