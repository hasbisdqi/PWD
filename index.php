<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script
        type="module"
        src="https://cdn.jsdelivr.net/gh/zerodevx/zero-md@2/dist/zero-md.min.js"></script>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
</head>

<body>
    <div class="max-w-3xl mx-auto my-4 p-4 border rounded-lg">

        <zero-md class="mb-8" src="/README.MD"></zero-md>

        <?php
        $baseUrl = "http://" . $_SERVER['HTTP_HOST']; // Ambil domain saat ini

        function listFolderFiles($dir, $baseUrl)
        {
            echo '<ul class="pl-4 border-l border-gray-300">';
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                    $filePath = $dir . '/' . $file;
                    $id = md5($filePath);
                    if (is_dir($filePath)) {
                        if ($file != '.git') {
                            echo "<li class='mb-2'>
                                    <button class='flex items-center text-blue-600 font-medium' onclick='toggleFolder(\"$id\")'>
                                        <span class='toggle-icon mr-2' id='icon-$id'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-chevron-right'><path d='m9 18 6-6-6-6'/></svg>
                                        </span> $file
                                    </button>
                                    <div id='$id' class='hidden'>";
                            listFolderFiles($filePath, $baseUrl);
                            echo '</div></li>';
                        }
                    } else {
                        echo "<li class='ml-4'><a href='" . substr($filePath, 2) . "' target='_blank' class='text-gray-800 hover:text-blue-600'>$file</a></li>";
                    }
                }
            }
            echo '</ul>';
        }

        listFolderFiles('./', $baseUrl);
        ?>
    </div>

    <script>
        function toggleFolder(id) {
            const folder = document.getElementById(id);
            const icon = document.getElementById('icon-' + id);
            if (folder.classList.contains('hidden')) {
                folder.classList.remove('hidden');
                icon.classList.add('rotate-90');
            } else {
                folder.classList.add('hidden');
                icon.classList.remove('rotate-90');
            }
        }
    </script>
</body>

</html>