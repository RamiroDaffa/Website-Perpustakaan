<?php  
 include 'config.php';
 include 'header.php';

 $sqlbuku = "SELECT * FROM buku";
 $querybuku = mysqli_query($db, $sqlbuku);
 $jumlah_buku = mysqli_num_rows($querybuku);

 $sqlanggota = "SELECT * FROM anggota";
 $querryanggota = mysqli_query($db, $sqlanggota);
 $jumlah_anggota = mysqli_num_rows($querryanggota);

?>  
  <div class="page-content">

                <!-- start page title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                     <div class="row align-items-center">
                         <div class="col-sm-6">
                             <div class="page-title">
                                 <h4>Dashboard</h4>
                                     <ol class="breadcrumb m-0">
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                         <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                     </ol>
                             </div>
                         </div>
                        
                     </div>
                    </div>
                 </div>
                 <!-- end page title -->    


                <div class="container-fluid">

                    <div class="page-content-wrapper">


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Anggota</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-primary">
                                                                <i class="fas fa-user text-primary font-size-20"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo $jumlah_anggota ?></h5>

                                                    <div class="progress mt-3" style="height: 4px;">
                                                        <div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>

                                    <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <p class="font-size-16">Buku</p>
                                                    <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">
                                                                <i class="fas fa-book text-success font-size-20"></i>
                                                            </span>
                                                    </div>
                                                    <h5 class="font-size-22"><?php echo $jumlah_buku ?></h5>

                                                    <div class="progress mt-3" style="height: 4px;">
                                                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    

                               
                                </div>
                            </div>

                        </div>

                        <div class="row">
              <div class="col-xl-4 col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">riwayat pengembalian</h4>
                                        <table>
                                            <?php
                                             $sql = "SELECT * FROM Pengembalian";
                                             $query = mysqli_query($db, $sql);
                                             while($row = mysqli_fetch_assoc($query)){
                                               echo '<tr>';
                                               echo '<td style="padding:20px;">'.$row['nama_anggota'].'</td>';
                                               echo '<td style="padding:20px;">'.$row['tanggal_kembali'].'</td>';
                                               echo '</tr>';
                                             }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                <div class="col-xl-8 col-md-8">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="header-title mb-4">Riwayat Peminjaman</h4>
                      <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                          <thead class="thead-light">
                            <tr>
                              <th>ID</th>
                              <th>Nama Anggota</th>
                              <th>Judul Buku</th>
                              <th>Tanggal Peminjaman</th>
                              <th>Tanggal Pemgembalian</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $sql = "SELECT * FROM Peminjaman";
                            $query = mysqli_query($db, $sql);
                            while($peminjaman = mysqli_fetch_assoc($query)){
                              echo "<tr>";

                              echo "<td>".$peminjaman['id']."</td>";
                              echo "<td>".$peminjaman['nama_anggota']."</td>";
                              echo "<td>".$peminjaman['judul_buku']."</td>";
                              echo "<td>".$peminjaman['tanggal_pinjam']."</td>";
                              echo "<td>".$peminjaman['tanggal_kembali']."</td>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
              </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                        


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
<?php include "footer.php"?>