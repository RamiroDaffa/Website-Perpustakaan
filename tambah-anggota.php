<?php
include 'header.php';
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
                         <li class="breadcrumb-item active">Form Input Data Anggota</li>
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

                        <h4 class="header-title">Form Input Data Anggota</h4>
                        <p class="card-title-desc">Silahkan isi form dibawah ini untuk menambahkan data Anggota baru di sistem META LIBARY</p>
                        <form action="proses-tambah-anggota.php" method="POST">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Anggota" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" placeholder="Masukkan Email" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="status" placeholder="Masukkan Status Anggota" id="example-text-input">
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" id="example-text-input">
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin " id="example-text-input">
                                    </div>
                            </div>
                            
                        <div class="row mb-3">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                        <input type="Submit" name="tambah" value="Simpan Data" class="btn btn-primary waves-effect waves-light"/>
                        </div>
                    </div>
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