<?php
include("config.php");

if(isset($_POST['tambah'])){

     // ambil data dari form
     $judul_buku = $_POST['judul_buku'];
     $pengarang = $_POST['pengarang'];
     $penerbit = $_POST['penerbit'];
     $tahun_terbit = $_POST['tahun_terbit'];
     $daftar_pustaka = $_POST['daftar_pustaka'];

    // buat query 
    $sql = "INSERT INTO buku (judul_buku, pengarang, penerbit, tahun_terbit, daftar_pustaka) VALUE ('$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit', '$daftar_pustaka')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman buku.php dengan status=sukses
        header('Location: buku.php?status=tambah');
    } else {
        // kalau gagal alihkan ke halaman buku.php dengan status=gagal
        header('Location: buku.php?status=gagaltambah');
    }

} else {
    die("Tidak Memiliki Akses...");
}

?>