<?php
include_once("functions/include_all.php");
should_login();
layout_header("Profile Guru");
layout_sidebar();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                    <br />
                    <a href="guru-editor.php" class="btn btn-primary">Tambah</a>
                    <br />
                    <br />
                </div>
                <div class="col-md-11"></div>
                <hr />
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Guru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * from tb_profile_guru order by id asc";
                            $data = db_get_all($sql);
                            foreach ($data as $guru){
                            ?>
                            <tr>
                                <td><img class="img-responsive" src="<?= $WEB_URL."/".$guru['foto'] ?>" 
                                width="50" 
                                alt="<?= $guru['name'] ?>"></td>
                                <td><?= $guru['name'] ?></td>
                                <td><a href="guru-editor.php?id=<?= $guru['id'] ?>" class="btn btn-warning"> <i class="nav-icon fas fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php 
                            } //end loop
                            ?>
                        </tbody>
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