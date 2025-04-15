<?php
include 'config.php';
include 'header.php';

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: anggota.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM anggota WHERE id=$id";
$query = mysqli_query($db, $sql);
$anggota = mysqli_fetch_assoc($query);

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
                 <h4>Form Data Anggota</h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                         <li class="breadcrumb-item"><a href="anggota.php">Anggota</a></li>
                         <li class="breadcrumb-item active">Form Edit Data Anggota</li>
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

                        <h4 class="header-title">Form Edit Data Anggota</h4>
                        <p class="card-title-desc">Silahkan edit form dibawah ini untuk mengubah data Anggota baru di sistem META LIBARY</p>
                        <form action="proses-edit-anggota.php" method="POST">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama" value="<?php echo $anggota['nama']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email"  value="<?php echo $anggota['email']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat"  value="<?php echo $anggota['alamat']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="status"  value="<?php echo $anggota['status']?>"/>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="tanggal_lahir"  value="<?php echo $anggota['tanggal_lahir']?>"/>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="jenis_kelamin"  value="<?php echo $anggota['jenis_kelamin']?>"/>
                                    </div>
                            </div>
                            
                        <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                        <input type="Submit" name="edit" value="Edit Data" class="btn btn-primary waves-effect waves-light"/>
                        </div>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $anggota['id'] ?>" />
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