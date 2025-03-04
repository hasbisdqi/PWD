<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="flex h-screen justify-center items-center">
    <form action="dynamic_var.php" method="POST" class="rounded-lg p-4 bg-gray-100 grid w-96 gap-2">
        <div class="grid">
            <label for="">Nama</label>
            <input class="p-2 rounded-lg border border-gray-200" type="text" name="name" placeholder="Nama" autocomplete="given-name">
        </div>
        <div class="grid">
            <label for="">Umur</label>
            <input class="p-2 rounded-lg border border-gray-200" type="number" name="age" placeholder="Umur" autocomplete="age">
        </div>
        <div class="grid">
            <label for="">Jenis Kelamin</label>
            <div class="flex items-center gap-2">

                <div class="">
                    <input type="radio" name="sex" value="Perempuan" id="pr" autocomplete="sex">
                    <label for="pr">Perempuan</label>
                </div>
                <div class="">
                    <input type="radio" name="sex" value="Laki Laki" id="lk" autocomplete="sex">
                    <label for="lk">Laki</label>
                </div>
            </div>
            <!-- <input class="p-2 rounded-lg border border-gray-200" type="text" name="jenis_kelamin" placeholder="Jenis Kelamin"> -->
        </div>
        <div class="grid">
            <label for="">Alamat</label>
            <input class="p-2 rounded-lg border border-gray-200" type="text" name="address" placeholder="Alamat" autocomplete="street-address">
        </div>
        <div class="grid">
            <label for="">Kota</label>
            <input class="p-2 rounded-lg border border-gray-200" type="text" name="city" autocomplete="address-level2" placeholder="Kota">
        </div>
        <button class="px-4 py-2 bg-blue-400 text-white rounded-lg" type="submit">Kirim</button>
    </form>
</body>

</html>