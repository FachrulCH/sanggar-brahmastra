<?php
include_once("functions/include_all.php");
shold_login();
include('layout.php');
$koneksi = koneksi_sanggar();
//tampilkan data yang akan dibuat
$tampil = mysqli_query($koneksi, "SELECT * from tb_kegiatan");
$data = mysqli_fetch_array($tampil);
if($data)
{
    //jika data ditemukan, maka data ditampung ke dalam variable
   $vid = $data['id'];
   $vtanggal = $data['tanggal'];
   $vnama = $data['nama_kegiatan'];
   $vgambar = $data['gambar'];
   $vketerangan = $data['keterangan'];
 
   }

   


    
       layout_header();
       
      
      layout_sidebar();
      ?>

<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <br />
                    <a href="articles-editor.html" class="btn btn-primary">Tambah</a>
                    <br />
                    <br />
                </div>
                <div class="col-md-11"></div>
                <hr />
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Kegiatan</h3>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>

                                <th>Tanggal</th>
                                <th>Nama Kegiatan</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th style="width: 30px">Aksi</th>

                            </tr>
                            <?php 
                                            $tampil = mysqli_query($koneksi, "SELECT * from tb_kegiatan order by id asc");
                                            while($data = mysqli_fetch_array($tampil)) :
                                        ?>
                        </thead>
                        <tbody>
                            <tr>

                                <td><?=$data['tanggal']?></td>
                                <td><?=$data['nama_kegiatan']?></td>
                                <td><?=$data['gambar']?></td>
                                <td><?=$data['keterangan']?></td>
                                <td><a href="kegiatan-detail.php?id=<?=$data['id']?>" class="btn btn-warning"> <i
                                            class="nav-icon fas fa-edit"></i></a>

                                </td>
                            </tr>
                        </tbody>
                        <?php endwhile?>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>

</html>