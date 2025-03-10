<?php
$data = $_POST;
$name = $_POST['name'];
$email = $_POST['email'];
$participants = $_POST['participants'];
$demoType = $_POST['demoType'];
$feature = $_POST['feature'];
$time = $_POST['time'];
$date = $_POST['date'];
$message = $_POST['message'];
$terms = $_POST['terms'];

echo "<h1>Hasil Formulir</h1><br>";
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Participants: $participants <br>";
echo "Demo Type: $demoType <br>";
echo "Feature: $feature <br>";
echo "Time: $time <br>";
echo "Date: $date <br>";
echo "Message: $message <br>";
echo "Terms: $terms <br>";
?>
