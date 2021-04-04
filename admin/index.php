<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header("Profile Guru");
admin_layout_sidebar();
$jumlah_karya = db_query("SELECT count(1) as total FROM `tb_karya`");
$jumlah_kegiatan = db_query("SELECT count(1) as total FROM `tb_kegiatan`");
$jumlah_guru = db_query("SELECT count(1) as total FROM `tb_profile_guru`");
?>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $jumlah_guru['total'] ?></h3>

                                    <p>Jumlah Guru</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="guru.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $jumlah_karya['total'] ?></h3>

                                    <p>Jumlah Karya</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-images"></i>
                                </div>
                                <a href="karya.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $jumlah_kegiatan['total'] ?></h3>

                                    <p>Jumlah Kegiatan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-calendar"></i>
                                </div>
                                <a href="kegiatan.php" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
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