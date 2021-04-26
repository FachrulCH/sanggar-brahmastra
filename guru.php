<?php
require_once('functions/include_all.php');
$sql = "SELECT * from tb_profile_guru order by id asc";
$data_guru = db_get_all($sql);
layout_header('Guru');
?>


<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <?php layout_navigation(); ?>

        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/guru1.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1 class="heading-section">Instruktur</h1>
                                        <h2>Brahmastra Art</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-staff">
            <div class="container">
                <?php
                foreach ($data_guru as $guru) {
                ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="staff">
                            <div class="card-body">
                                <h1 class="card-title"><?= $guru['name'] ?></h1>
                                <img class="img-responsive" src="<?= $guru['foto'] ?>" width="300" height="300"
                                    alt="<?= $guru['name'] ?>">
                                <br>
                                <?= $guru['profile'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <?= $guru['experience'] ?>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Hasil Karya</h3>
                                <a href="gallery.php?kode_id=<?= $guru['kode_id'] ?>" class="btn btn-primary">Lihat
                                    Karya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                } //end loop
                ?>
            </div>
        </div>


        <footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 fh5co-widget">
                        <h3>Sanggar Brahmastra Art</h3>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                        <h3>Brahmastra Art</h3>
                        <ul class="fh5co-footer-links">
                            <li><a href="kelas.html">Kelas</a></li>
                            <li><a href="teacher-profil.html">Guru</a></li>
                            <li><a href="kegiatan.html">Kegiatan</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Daftar</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                        <h3>Brahmastra Art</h3>
                        <ul class="fh5co-footer-links">
                            <li><a href="kelas.html">Kelas</a></li>
                            <li><a href="teacher-profil.html">Guru</a></li>
                            <li><a href="kegiatan.html">Kegiatan</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Daftar</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                        <h3>Brahmastra Art</h3>
                        <ul class="fh5co-footer-links">
                            <li><a href="kelas.html">Kelas</a></li>
                            <li><a href="teacher-profil.html">Guru</a></li>
                            <li><a href="kegiatan.html">Kegiatan</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Daftar</a></li>
                        </ul>
                    </div>

                </div>
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2021. Brahmastra Art. All Rights Reserved.</small>

                        </p>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
    </script>
</body>

</html>