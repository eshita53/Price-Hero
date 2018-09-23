<?php
require __DIR__ . "/vendor/autoload.php";
$qrcode = new QrReader('path/to_image');
$text = $qrcode->text();
?>
