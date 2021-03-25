<?php
include_once("functions/include_all.php");
should_login();
layout_header("Guru Editor", '<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">');
layout_sidebar();
if (isset($_GET['id'])) {
    // Jika ada ID di url maka masuk mode edit
    $sql = "SELECT * FROM tb_profile_guru WHERE id = $_GET[id]";
    $guru = db_query($sql);
} else {
    // isi data defaultnya, kosongan
    $guru = array(
        'foto' => '',
        'name' => '',
        'profile' => '',
        'experience' => ''
    );
}

// Replace data kosong dengan data default
if (empty($guru['foto'])) {
    $guru['foto'] = '/images/avatar-placeholder.png';
}

if (empty($guru['experience'])) {
    $guru['experience'] = <<<HTML
        <table class="table">
        <thead>
            <tr>
                <th scope="col">NO.</th>
                <th scope="col">Tahun</th>
                <th scope="col">Nama Kegiatan</th>
                <th scope="col">Tempat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>2016</td>
                <td>contoh</td>
                <td>contoh</td>
            </tr>
        </tbody>
        </table>
    HTML;
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="guru-simpan.php?aksi=foto" method="post">
                        <h3>Foto Profile</h3>
                        <div class="mb-3">
                            <img src="<?= $WEB_URL . "/$guru[foto]" ?>" class="img-fluid" alt="" width="250">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Unggah foto profil</label>
                            <input class="form-control" type="file" id="formFile">
                            <br />
                            <button name="hapus_foto" type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Foto</button> | 
                            <button name="simpan_foto" type="submit" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Simpan Foto</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <form action="guru-simpan.php?aksi=profil" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="nama" value="<?= $guru['name'] ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="biodata" class="form-label">Biodata</label>
                            <textarea class="form-control textarea" id="biodata" rows="3" name="biodata"><?= $guru['profile'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pengalaman" class="form-label">Pengalaman Pameran</label>
                            <textarea class="form-control textarea" id="pengalaman" rows="3" name="pengalaman"><?= $guru['experience'] ?></textarea>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary pull-right"><i class="fa fa-save" aria-hidden="true"></i> Simpan</button>
                </div>
                </form>
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
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
</script>
</body>

</html>