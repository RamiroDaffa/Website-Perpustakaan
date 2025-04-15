<?php

include("config.php");

// cek apakah tombol edit sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $daftar_pustaka = $_POST['daftar_pustaka'];

    // buat query update
    $sql = "UPDATE buku SET judul_buku='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit', daftar_pustaka='$daftar_pustaka' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman buku.php
        header('Location: buku.php?status=edit');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: buku.php?status=gagaledit');
    }


} else {
    die("Tidak Memiliki Akses");
}

?>