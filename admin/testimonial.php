<?php
include_once('../functions/include_all.php');
should_login();
$koneksi = koneksi_sanggar();
//tampilkan data yang akan dibuat
$tampil = mysqli_query($koneksi, "SELECT * from tb_testimonial");
$data = mysqli_fetch_array($tampil);
admin_layout_header("Testimonial");
admin_layout_sidebar();
?>

<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <br />
                    <a href="testimonial-editor.php" class="btn btn-primary">Tambah</a>
                    <br />
                    <br />
                </div>
                <div class="col-md-11"></div>
                <hr />
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar testimonial</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Keterangan</th>
                                <th style="width: 30px">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tampil = mysqli_query($koneksi, "SELECT * from tb_testimonial order by id asc");
                            while ($data = mysqli_fetch_array($tampil)) :
                            ?>
                                <tr>

                                    <td><img src="<?= $WEB_URL . $data['foto'] ?>" width="50"></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                    <td><?= substr(strip_tags($data['pesan']), 0, 50) . "..." ?></td>
                                    <td><a href="testimonial-editor.php?id=<?= $data['id'] ?>" class="btn btn-warning"> <i class="nav-icon fas fa-edit"></i></a>

                                    </td>
                                </tr>
                        </tbody>
                    <?php endwhile ?>
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