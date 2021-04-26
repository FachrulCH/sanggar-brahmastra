<?php
require_once('functions/include_all.php');
$sql_karya = "SELECT * FROM `tb_karya`";
if (!empty(@$_GET['kode_id'])){
    $sql_karya .= " WHERE kode_id = '$_GET[kode_id]'";
}
$daftar_karya = db_get_all($sql_karya);
layout_header('Galeri Karya');
?>

<!-- Ekko Lightbox -->
<link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css" />

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <?php layout_navigation(); ?>

        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_4.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1 class="heading-section">Galeri Karya</h1>
                                        <h2>Brahmastra Art</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-blog">
            <div class="container">
                <?php
                if (empty($daftar_karya)) {
                    echo '<div class="alert alert-warning" role="alert"><i class="fa fa-info-circle" aria-hidden="true"></i> Belum ada karya </div>';
                } else {

                ?>
                <div class="row">
                    <?php
                        foreach ($daftar_karya as $karya) {
                        ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog">
                            <a href="<?= $WEB_URL . $karya['foto'] ?>" class="blog-img-holder"
                                style="background-image: url(<?= $WEB_URL . $karya['foto'] ?>);" data-toggle="lightbox"
                                data-title="<?= $karya['judul_karya'] ?>"></a>
                            <div class="blog-text">
                                <h3><a href="#"><?= $karya['judul_karya'] ?></a></h3>
                                <span class="posted_on"><?= $karya['tanggal'] ?></span>
                                <p><?= $karya['keterangan'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
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