<?php
include 'conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE username='$username' AND password='$password'");

$jumlah = mysqli_num_rows($data);

if ($jumlah > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('location:session.php');
} else {
    header('location:login.php?pesan=Username or Password is incorrect!');
}
