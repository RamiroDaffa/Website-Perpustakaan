<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "perpustakaan";
$db = mysqli_connect($server, $user, $pass, $database);
if (!$db) {
    die("koneksi ke databse gagal: " . mysqli_connect_error());
}
else {
    echo "Success";
}
?>