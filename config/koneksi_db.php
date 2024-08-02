<?php
define('HOST','localhost');
define('USER','root');
define('DB','inventory');
define('PASS','');
$conn = new mysqli(HOST,USER,PASS,DB) or die('koneksi error untuk mengakses database');
?> 