<?php 
include("config.php");

if( isset($_GET['id'])){

    //ambil id dari query string
    $id = $_GET['id'];

    //buat query hapus
    $sql = "DELETE FROM anggota WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query hapus berhasil?
    if($query){
        header('Location: anggota.php?status=hapus');
    } else {
        header('Location: anggota.php?status=gagalhapus');
    }
} else {
    die("Tidak Memiliki Akses");
}



?>

