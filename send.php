<?php

$mail = $_POST['email'];
$nama = $_POST['username'];

$subjek = 'alpanperdiansah3@gmail.com';
$mail1 = $mail;

$body = "<h1>Hai $nama</h1>email kamu : $mail belum di verifikasi. silahkan kunjungi web kami untuk
<a href="#">verifikasi</a>";

$headers = "From: Admin@contoh.com\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mail1, $subjek." #".rand(1000,10000), $body, $headers);
?>
<?php
$random = rand(1000,5000);
?>

<meta content='0;url=./email.html' http-equiv='refresh'/>
</head><body>
</html>