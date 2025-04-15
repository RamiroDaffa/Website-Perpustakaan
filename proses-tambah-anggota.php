<?php
include("config.php");

if(isset($_POST['tambah'])){

     // ambil data dari form
     $nama = $_POST['nama'];
     $email = $_POST['email'];
     $alamat = $_POST['alamat'];
     $status = $_POST['status'];
     $tanggal_lahir = $_POST['tanggal_lahir'];
     $jenis_kelamin = $_POST['jenis_kelamin'];

    // buat query 
    $sql = "INSERT INTO anggota (nama, email, alamat, status, tanggal_lahir, jenis_kelamin) VALUE ('$nama', '$email', '$alamat', '$status', '$tanggal_lahir', '$jenis_kelamin')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman anggota.php dengan status=sukses
        header('Location: anggota.php?status=tambah');
    } else {
        // kalau gagal alihkan ke halaman anggota.php dengan status=gagal
        header('Location: anggota.php?status=gagaltambah');
    }

} else {
    die("Tidak Memiliki Akses...");
}

?>