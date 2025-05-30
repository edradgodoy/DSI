<!-- Content -->
<div class="content">
<h1>Pagina en Blanco</h1>
<?php

// Edrad*2025

$password = 'admin1234';
$pass = 'AsdhK/4aasdiu75'.$password.'asdjk3783#8u9';
echo $pass;
echo "<br>";

$md5 = md5($pass);
echo 'MD5 = '.$md5;
echo "<br>";

$sha1 = sha1($pass);
echo 'SHA1 = '.$sha1; 
echo "<br>";

$enc = sha1($md5);
echo 'SHA1 de MD5 = '.$enc;
echo "<br>";

$hash_pass = crypt($enc, '$6$rounds=999997$nsjkdiosdkjfkdoieyudjeyth$'); 
echo 'HASH = '.$hash_pass;
echo "<br>";

?>

</div>
<!-- End Content -->