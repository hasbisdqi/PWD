<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="card p-4">

            <form action="outputpoin.php" class="row">
                <div class="mb-3">
                    <label for="bil1">Bilangan 1</label>
                    <input class="form-control" type="number" name="bil1" id="">
                </div>
                <div class="mb-3">
                    <label for="bil2">Bilangan 2</label>
                    <input class="form-control" type="number" name="bil2" id="">
                </div>
                <div class="mb-3">
                    <label for="">Operasi</label>
                    <select class="form-select" name="op" id="">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="kali">x</option>
                        <option value="bagi">/</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>