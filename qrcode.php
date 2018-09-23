<?php
// header('Content_Type: image/png');
session_start();
require_once'vendor/autoload.php';
use Endroid\QrCode\QrCode;

// $db = mysqli_connect('localhost', 'root', '12386199', 'registration') or die("connection error".mysqli_error($db));
$userEmail=$_SESSION['email'];

$qrCode = new QrCode($userEmail);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

// $qrCode->writeFile(__DIR__.'/qrcode.png');

 ?>
