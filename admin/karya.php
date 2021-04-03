<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header('Karya Guru');
admin_layout_sidebar();
$sql_karya = "SELECT * FROM tb_karya";
$daftar_karya = db_get_all($sql_karya);
?>
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css" />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Seluruh Karya</h1>
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
            <?php
            if (empty($daftar_karya)) {
                echo '<div class="alert alert-warning" role="alert"><i class="fa fa-info-circle" aria-hidden="true"></i> Belum ada karya tersimpan, silahkan pilih menu `Tambah`</div>';
            } else {
            ?>
                <div class="row">
                    <?php
                    foreach ($daftar_karya as $karya) {
                    ?>
                        <div class="col-md-6">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <a href="<?= $WEB_URL . $karya['foto'] ?>" data-toggle="lightbox" data-title="<?= $karya['judul_karya'] ?>">
                                            <img src="<?= $WEB_URL . $karya['foto'] ?>" width="190">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><b><?= $karya['judul_karya'] ?></b></h5>
                                            <p class="card-text"><?= $karya['keterangan'] ?></p>
                                            <p class="card-text"><small class="text-muted"><?= $karya['tanggal'] ?></small></p>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <a href="karya-editor.php?id=<?= $karya['id'] ?>" class="btn btn-primary float-left"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                                            <?php 
                                            create_confirmation(
                                                '<i class="fa fa-trash" aria-hidden="true"></i> Hapus Karya',
                                                'btn-danger',
                                                'Yakin hapus karya ini?',
                                                "karya-simpan.php?action=hapus&id=$karya[id]",
                                                "float-right"
                                            );
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            <?php
            }
            ?>

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