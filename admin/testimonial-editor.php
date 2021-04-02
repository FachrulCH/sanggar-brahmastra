<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header('Editor Testimonial');
admin_layout_sidebar();

if (isset($_GET['id'])) {
    // load data testimonial jika edit
    $sql = "SELECT * FROM tb_testimonial WHERE id = $_GET[id]";
    $testimonial = db_query($sql);
} else {
    $testimonial = array(
        'nama' => '',
        'keterangan' => '',
        'foto' => 'images/testimonial/avatar-placeholder.png',
        'pesan' => ''
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
                    <h1 class="m-0 text-dark">Testimonial</h1>
                </div><!-- /.col -->
            </div>
            <form action="testimonial-simpan.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_testimonial" value="<?= @$_GET['id'] ?>">
                <div class="form-group row">
                    <label for="inputJudul" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputJudul" name="nama_testimonial" placeholder="Tuliskan nama pemberi testimonial" required="true" value="<?= $testimonial['nama'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputKeterangan" name="keterangan" placeholder="Sebagai (contoh: siswa/guru/orangtua)" required="true" value="<?= $testimonial['keterangan'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="keterangan" name="pesan" required="true">
                            <?= $testimonial['pesan'] ?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <input type="file" accept="image/*" class="custom-file-input" id="customFile" onchange="loadFile(event)" name="foto_testimonial" required="true">
                        <label class="custom-file-label" for="customFile">Pilih foto testimonial</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <img src="<?= $WEB_URL . $testimonial['foto'] ?>" width="200" id="output">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
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