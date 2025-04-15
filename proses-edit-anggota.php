<?php

include("config.php");

// cek apakah tombol edit sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // buat query update
    $sql = "UPDATE anggota SET nama='$nama', email='$email', alamat='$alamat', status='$status', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman anggota.php
        header('Location: anggota.php?status=edit');
    } else {
        // kalau gagal tampilkan pesan
        header('Location: anggota.php?status=gagaledit');
    }


} else {
    die("Tidak Memiliki Akses");
}

?>