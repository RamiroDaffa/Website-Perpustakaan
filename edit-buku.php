<?php
include 'config.php';
include 'header.php';

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: buku.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk ambil data dari database
$sql = "SELECT * FROM buku WHERE id=$id";
$query = mysqli_query($db, $sql);
$buku = mysqli_fetch_assoc($query);

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
                 <h4>Form Data Buku</h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                         <li class="breadcrumb-item"><a href="buku.php">Buku</a></li>
                         <li class="breadcrumb-item active">Form Edit Data Buku</li>
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

                        <h4 class="header-title">Form Edit Data Buku</h4>
                        <p class="card-title-desc">Silahkan edit form dibawah ini untuk mengubah data buku baru di sistem META LIBARY</p>
                        <form action="proses-edit.php" method="POST">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Judul Buku</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="judul_buku" value="<?php echo $buku['judul_buku']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Pengarang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="pengarang"  value="<?php echo $buku['pengarang']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Penerbit</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="penerbit"  value="<?php echo $buku['penerbit']?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tahun Terbit</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="tahun_terbit"  value="<?php echo $buku['tahun_terbit']?>"/>
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Daftar Pustaka</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="daftar_pustaka"  value="<?php echo $buku['daftar_pustaka']?>"/>
                                    </div>
                            </div>
                            
                        <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                        <input type="Submit" name="edit" value="Edit Data" class="btn btn-primary waves-effect waves-light"/>
                        </div>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $buku['id'] ?>" />
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