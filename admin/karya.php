<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header();
admin_layout_sidebar();
if (isset($_GET['id'])) {
    // Jika ada ID di url maka masuk mode edit
    $sql = "SELECT * FROM tb_profile_guru WHERE id = $_GET[id]";
    $guru = db_query($sql);
}
?>
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css" />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <?php
        if (empty($guru)) {
            echo "Profil Guru tidak ditemukan!";
            die();
        }
        ?>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Karya Nama</h1>
                </div><!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-1">
                    <br />
                    <a href="karya-editor.php" class="btn btn-primary">Tambah</a>
                    <br />
                    <br />
                </div>
                <div class="col-md-11"></div>
                <hr />
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="../karya/guru/lukisan1.JPG" data-toggle="lightbox" data-title="sample 3 - red">
                                    <img src="../karya/guru/lukisan1.JPG" alt="..." width="190">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Judul Lukisan</b></h5>
                                    <p class="card-text">Deskripsi singkat lukisan</p>
                                    <p class="card-text"><small class="text-muted">01 Jan 2021</small></p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a href="#" class="btn btn-primary float-left"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                    <a href="#" class="btn btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../karya/guru/lukisan1.JPG" alt="..." width="190">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Judul Lukisan</b></h5>
                                    <p class="card-text">Deskripsi singkat lukisan</p>
                                    <p class="card-text"><small class="text-muted">01 Jan 2021</small></p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a href="#" class="btn btn-primary float-left"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                    <a href="#" class="btn btn-danger float-right"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>
</div>
</div>
<?php
admin_footer();
?>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
<!-- Ekko Lightbox -->
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script>
    $(function() {
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true,
            });
        });
    });
</script>
</body>

</html>