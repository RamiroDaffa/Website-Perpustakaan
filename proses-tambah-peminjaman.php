<?php
include("config.php");

if(isset($_POST['tambah'])){

     // ambil data dari form
     $nama_anggota = $_POST['nama_anggota'];
     $judul_buku = $_POST['judul_buku'];
     $tanggal_pinjam = $_POST['tanggal_pinjam'];
     $tanggal_kembali = $_POST['tanggal_kembali'];

    // buat query 
    $sql = "INSERT INTO peminjaman (nama_anggota, judul_buku, tanggal_pinjam, tanggal_kembali) VALUE ('$nama_anggota', '$judul_buku', '$tanggal_pinjam', '$tanggal_kembali')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman peminjaman.php dengan status=sukses
        header('Location: peminjaman.php?status=tambah');
    } else {
        // kalau gagal alihkan ke halaman peminjaman.php dengan status=gagal
        header('Location: peminjaman.php?status=gagaltambah');
    }

} else {
    die("Tidak Memiliki Akses...");
}

?>