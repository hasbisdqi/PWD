<?php
$conn = new mysqli('localhost', 'root', '', 'akademik');

if ($conn->connect_error) {
    die('Koneksi Gagal! : '. $conn->error);
}