<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header('Karya');
admin_layout_sidebar();

if (isset($_GET['id'])){
    // load data karya jika edit
    $sql = "SELECT * FROM tb_karya_guru WHERE id = $_GET[id]";
    $karya = db_query($sql);
}else{
    $karya = array(
        'judul_karya' => '',
        'keterangan' => '',
        'tanggal' => '',
        'foto' => 'karya/guru/sample.jpg'
    );
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Karya Guru</h1>
                </div><!-- /.col -->
            </div>
            <form action="karya-simpan.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_guru" value="<?= @$_GET['guru'] ?>">
                <input type="hidden" name="id_karya" value="<?= @$_GET['id'] ?>">
                <div class="form-group row">
                    <label for="inputJudul" class="col-sm-2 col-form-label">Judul Karya</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputJudul" name="judul" placeholder="Tuliskan judul/nama karya ini" required="true" value="<?= $karya['judul_karya'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan" required="true"><?= $karya['keterangan'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Tanggal Karya</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="date" id="gridCheck1" name="tanggal" required="true" value="<?= $karya['tanggal'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <input type="file" accept="image/*" class="custom-file-input" id="customFile" onchange="loadFile(event)" name="foto_karya" required="true">
                        <label class="custom-file-label" for="customFile">Pilih Gambar Karya</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <img src="<?= $WEB_URL . '/'.$karya['foto']?>" width="200" id="output">
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
<script>
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