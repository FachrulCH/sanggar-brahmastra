<?php
require_once('functions/include_all.php');
$sql = "SELECT * FROM tb_kegiatan where id = $_GET[id]";
$kegiatan = db_query($sql);
layout_header('Kegiatan');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css" />
<style type="text/css">
.share-konten {
    margin-top: 10px;
    margin-bottom: 10px;
    margin-right: 5px;
    width: 32px;
    height: 32px;
}
</style>

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
                                        <h1 class="heading-section">Events &amp; Agenda</h1>
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
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2><?= $kegiatan['nama_kegiatan'] ?></h2>
                    </div>
                </div>
                <div class="row row-padded-mb">
                    <div class="col-lg-3 col-md-3">
                        <a href="<?= $WEB_URL . $kegiatan['gambar'] ?>" data-toggle="lightbox"
                            data-title="<?= $kegiatan['nama_kegiatan'] ?>">
                            <img src="<?= $WEB_URL . $kegiatan['gambar'] ?>" width="90%" class="float-rigt">
                        </a>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="fh5co-blog">

                            <div class="blog-text">
                                <span class="posted_on"><?= $kegiatan['tanggal'] ?></span>
                                <p><?= $kegiatan['keterangan'] ?></p>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h3>
                                        <a href="https://www.facebook.com/share.php?u=<?= $actual_link ?>"
                                            target="_blank">
                                            <img src="https://image.flaticon.com/icons/svg/124/124010.svg"
                                                class="share-konten">
                                            Bagikan ke Facebook </a>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3><a href="https://twitter.com/intent/tweet?url=<?= $actual_link ?>"
                                            target="_blank">
                                            <img src="https://image.flaticon.com/icons/svg/124/124021.svg"
                                                class="share-konten">
                                            Bagikan ke Twitter</a></h3>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

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