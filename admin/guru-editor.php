<?php
include_once("functions/include_all.php");
should_login();
layout_header("Guru Editor", '<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">');
layout_sidebar();
if (isset($_GET['id'])){
    // Jika ada ID di url maka masuk mode edit
    $sql = "SELECT * FROM tb_profile_guru WHERE id = $_GET[id]";
    $guru = db_query($sql);
    if (empty($guru['foto'])){
        $guru['foto'] = '/images/avatar-placeholder.png';
    }
}else{
    // isi data defaultnya, kosongan
    $guru = array();
    $guru['foto'] = '/images/avatar-placeholder.png';
    $guru['name'] = '';
    $guru['profile'] = '';
    $guru['experience'] = '';
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <b>Foto Profile</b>

                    <div class="mb-3">
                        <img src="<?= $WEB_URL . "/$guru[foto]" ?>" class="img-fluid" alt="" width="250" >
                    </div>
                    <div class="mb-3">
                        <button type="button" name="" id="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                        <br />
                        <label for="formFile" class="form-label">Unggah foto profil</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" value="<?= $guru['name'] ?>" />
                    </div>
                    <div class="mb-3">
                        <label for="biodata" class="form-label">Biodata</label>
                        <textarea class="form-control textarea" id="biodata" rows="3"><?= $guru['profile'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="pengalaman" class="form-label">Pengalaman Pameran</label>
                        <textarea class="form-control textarea" id="pengalaman" rows="3"><?= $guru['experience'] ?></textarea>
                    </div>
                    <div class="text-right">
                    <button type="button" name="save" class="btn btn-primary pull-right"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
                    </div>
                </div>
            </div>
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
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
</body>

</html>