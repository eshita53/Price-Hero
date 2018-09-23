!<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include ("qrcode/qrlib.php")
 QRcode::png("wwww.google.com","qr.png","10","10");
?>
<img src="qr.png"/>
</body>
</html>
