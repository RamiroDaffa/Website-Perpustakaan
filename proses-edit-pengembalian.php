<?php

include("config.php");

// cek apakah tombol edit sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama_anggota = $_POST['nama_anggota'];
    $judul_buku = $_POST['judul_buku'];
    $tanggal_kembali = $_POST['tanggal_kembali'];

    // buat query update
    $sql = "UPDATE pengembalian SET nama_anggota='$nama_anggota', judul_buku='$judul_buku', tanggal_kembali='$tanggal_kembali' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman pengembalian.php
        header('Location: pengembalian.php?status=edit');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: pengembalian.php?status=gagaledit');
    }


} else {
    die("Tidak Memiliki Akses");
}

?>