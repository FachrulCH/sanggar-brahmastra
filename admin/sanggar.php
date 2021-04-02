<?php
include_once('../functions/include_all.php');
should_login();
admin_layout_header('Profil Sanggar');
admin_layout_sidebar();

// load data profil jika edit
$sql = "SELECT * FROM `tb_profile_sanggar`";
$profil = db_get_all($sql);
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
                    <h1 class="m-0 text-dark">Profil Sanggar</h1>
                </div><!-- /.col -->
            </div>
            <form action="sanggar-simpan.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Headline 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputJudul" name="judulHeadline1" placeholder="Tuliskan nama profil ini" required="true" value="<?= $profil[0]['judul'] ?>"><br />
                        <textarea class="form-control textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="keterangan1" name="headline1" required="true">
                            <?= $profil[0]['keterangan'] ?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi2" class="col-sm-2 col-form-label">Headline 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputJudul2" name="judulHeadline2" placeholder="Tuliskan nama profil ini" required="true" value="<?= $profil[1]['judul'] ?>"><br />
                        <textarea class="form-control textarea" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="keterangan2" name="headline2" required="true">
                            <?= $profil[1]['keterangan'] ?>
                        </textarea>
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