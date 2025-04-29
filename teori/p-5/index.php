    <?php
    include_once('conn.php');
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $limit = 10;
    $limit_start = ($page - 1) * $limit;
    $category = $_GET['cat'] ? "WHERE CategoryID = " . $_GET['cat'] : "";
    $productsql = "SELECT * FROM products $category LIMIT $limit_start, $limit";
    $products = $conn->query($productsql);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>

    <body>
        <div class="container mx-auto mt-8">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl mb-8 font-bold">Products lists</h1>
            </div>
            <div class="grid grid-cols-4">
                <div class="col-span-1">
                    <h1 class="text-4xl mb-8 font-bold">Categories</h1>
                    <div class="grid">
                        <?php
                        $catsql = "SELECT * FROM categories";
                        $catresult = $conn->query($catsql);
                        while ($row = $catresult->fetch_assoc()) {
                        ?>
                            <form action="">
                                <input type="hidden" name="cat" value="<?= $row['CategoryID'] ?>">
                                <button class="hover:text-blue-500" href="?cat=<?= $row['CategoryID'] ?>">
                                    <?= $row['CategoryName'] ?>
                                </button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="flex flex-col col-span-3">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Product</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Price</th>
                                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        <?php
                                        while ($row = $products->fetch_assoc()) {
                                        ?>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800"><?= $row['ProductID'] ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?= $row['ProductName'] ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><?= $row['UnitPrice'] ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>