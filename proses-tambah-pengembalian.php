<?php
include("config.php");

if(isset($_POST['tambah'])){

     // ambil data dari form
     $nama_anggota = $_POST['nama_anggota'];
     $judul_buku = $_POST['judul_buku'];
     $tanggal_kembali = $_POST['tanggal_kembali'];

    // buat query 
    $sql = "INSERT INTO pengembalian (nama_anggota, judul_buku, tanggal_kembali) VALUE ('$nama_anggota', '$judul_buku','$tanggal_kembali')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman pengembalian.php dengan status=sukses
        header('Location: pengembalian.php?status=tambah');
    } else {
        // kalau gagal alihkan ke halaman pengembalian.php dengan status=gagal
        header('Location: pengembalian.php?status=gagaltambah');
    }

} else {
    die("Tidak Memiliki Akses...");
}

?>