<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header('Kegiatan');
admin_layout_sidebar();

if (isset($_GET['id'])) {
    // load data kegiatan jika edit
    $sql = "SELECT * FROM tb_kegiatan WHERE id = $_GET[id]";
    $kegiatan = db_query($sql);
} else {
    $kegiatan = array(
        'nama_kegiatan' => '',
        'tanggal' => '',
        'gambar' => 'karya/guru/sample.jpg',
        'keterangan' => ''
    );
}
?>
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Artikel Kegiatan</h1>
                </div><!-- /.col -->
            </div>
            <form action="kegiatan-simpan.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_kegiatan" value="<?= @$_GET['id'] ?>">
                <div class="form-group row">
                    <label for="inputJudul" class="col-sm-2 col-form-label">Judul Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputJudul" name="nama_kegiatan" placeholder="Tuliskan nama kegiatan ini" required="true" value="<?= $kegiatan['nama_kegiatan'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="keterangan" name="keterangan" required="true">
                            <?= $kegiatan['keterangan'] ?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Tanggal kegiatan</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="date" id="gridCheck1" name="tanggal" required="true" value="<?= $kegiatan['tanggal'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <input type="file" accept="image/*" class="custom-file-input" id="customFile" onchange="loadFile(event)" name="foto_kegiatan" required="true">
                        <label class="custom-file-label" for="customFile">Pilih foto kegiatan</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <img src="<?= $WEB_URL . $kegiatan['gambar'] ?>" width="200" id="output">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
                        <?php 
                        // jika mode edit (id tidak kosong), munculkan tombol hapus
                        if (!empty(@$_GET['id'])){
                            create_confirmation(
                                '<i class="fa fa-trash" aria-hidden="true"></i> Hapus Kegiatan',
                                'btn-danger',
                                'Yakin hapus kegiatan ini?',
                                "kegiatan-simpan.php?action=hapus&id=$kegiatan[id]",
                                "float-right"
                            );
                        }
                        ?>
                    </div>
                </div>
            </form>
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
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
</body>

</html>