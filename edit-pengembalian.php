<?php
include 'config.php';
include 'header.php';

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: pengembalian.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM pengembalian WHERE id=$id";
$query = mysqli_query($db, $sql);
$pengembalian = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query)< 1){
    die("Data Tidak Ditemukan");
}
?>

<div class="page-content">
<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h4>Form Data Pengembalian</h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                         <li class="breadcrumb-item"><a href="pengembalian.php">Pengembalian</a></li>
                         <li class="breadcrumb-item active">Form Edit Data Pengembalian</li>
                     </ol>
             </div>
         </div>
       
     </div>
    </div>
 </div>
 <!-- end page title -->    


<div class="container-fluid">
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="header-title">Form Edit Data Pengembalian</h4>
                        <p class="card-title-desc">Silahkan edit form dibawah ini untuk mengubah data Pengembalian baru di sistem META LIBARY</p>
                        <form action="proses-edit-pengembalian.php" method="POST">
                            <div class="row mb-4">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Anggota</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama_anggota" value="<?php echo $pengembalian['nama_anggota']?>"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Judul buku</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="judul_buku"  value="<?php echo $pengembalian['judul_buku']?>"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="tanggal_kembali"  value="<?php echo $pengembalian['tanggal_kembali']?>"/>
                                    </div>
                            </div>
                            
                        <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                        <input type="Submit" name="edit" value="Edit Data" class="btn btn-primary waves-effect waves-light"/>
                        </div>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $pengembalian['id'] ?>" />
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div>

    
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
 <?php
 include 'footer.php';
 ?>