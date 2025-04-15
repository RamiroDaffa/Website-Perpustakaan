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
                 <h4>Form Data Buku</h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                         <li class="breadcrumb-item"><a href="buku.php">Buku</a></li>
                         <li class="breadcrumb-item active">Form Input Data Buku</li>
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

                        <h4 class="header-title">Form Input Data Buku</h4>
                        <p class="card-title-desc">Silahkan isi form dibawah ini untuk menambahkan data buku baru di sistem META LIBARY</p>
                        <form action="proses-tambah.php" method="POST">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Judul Buku</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="judul_buku" placeholder="Masukkan Judul Buku" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Pengarang</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="pengarang" placeholder="Masukkan Nama Pengarang" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Penerbit</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="penerbit" placeholder="Masukkan Penerbit" id="example-text-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Tahun Terbit</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" id="example-text-input">
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Daftar Pustaka</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="daftar_pustaka" placeholder="Masukkan Daftar Pustaka" id="example-text-input">
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