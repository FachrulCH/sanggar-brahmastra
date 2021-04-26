<?php
require_once('functions/include_all.php');
layout_header();
$sql_profil = "SELECT * FROM `tb_profile_sanggar`";
$profil = db_get_all($sql_profil);
$list_testimonial = db_get_all("SELECT * FROM `tb_testimonial`");
$list_kegiatan = db_get_all("SELECT * FROM tb_kegiatan ORDER BY id DESC LIMIT 6");
$list_karya = db_get_all("SELECT * FROM `tb_karya` ORDER BY id DESC LIMIT 6 ");
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
                    <li style="background-image: url(images/slider-1.1.JPG)">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Temukan bakat mu</h1>
                                        <p><a class="btn btn-primary btn-lg"
                                                href="https://forms.gle/hTQdtpaTtvbepSRx6">Join Sekarang!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/slider1.jpg)">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                    <div class="slider-text-inner">
                                        <h1>Tingakatkan kreasi dan apresiasi Seni Rupa bersama Sanggar Brahmastra Art
                                        </h1>
                                        <p><a class="btn btn-primary btn-lg btn-learn"
                                                href="https://forms.gle/hTQdtpaTtvbepSRx6">Join Sekarang!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/slider2.jpg)">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center slider-text">

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-course-categories">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <?= $profil[0]['judul'] ?>
                        <?= $profil[0]['keterangan'] ?>
                    </div>
                </div>

                <div id="fh5co-about">
                    <div class="container">
                        <div class="col-md-6 animate-box">
                            <?= $profil[1]['judul'] ?>
                            <?= $profil[1]['keterangan'] ?>
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="images/logo.jpeg" alt="Free HTML5 Bootstrap Template" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-counter" class="fh5co-counters">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2>Kelas Melukis</h2>
                        <p>Kelas Melukis di Sanggar Brahmastra Art terdapat 3 kelas.</p>
                        <p>Oil Pastel, Cat Acrylic, Cat Minyak</p>
                        <p>Setiap kelas memiliki 4 tingkatan ; dasar, lanjutan, pemantapan, pameran</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(oil-pastel-crayons.jpg)"> </a>
                            <div class="desc">
                                <h3><a href="#">Oil Pastel</a></h3>
                                <p>Oil Pastel atau Pastel Minyak adalah media melukis yang terbuat dari lilin dan minyak
                                    yang sulit mengering.</p>
                                <p>Di dalam lukisan, oil pastel membrikan kesan lebih kasar dan bertekstur dari pastel
                                    biasa. hasil akhirnya akaln lebih lengket tetapi melekat lebih lama pada media
                                    gambar.</p>
                                <span><a href="https://forms.gle/hTQdtpaTtvbepSRx6"
                                        class="btn btn-primary btn-sm btn-course">Ambil Kelas</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(acrylic.jpg)"> </a>
                            <div class="desc">
                                <h3><a href="#">Cat Acrylic</a></h3>
                                <p>Cat akrilik larut dalam air, tetapi tahan air saat cat sudah mengering. warna cat
                                    akrilik lebih solid dibandingkan cat air.</p>
                                <span><a href="https://forms.gle/hTQdtpaTtvbepSRx6"
                                        class="btn btn-primary btn-sm btn-course">Ambil Kelas</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="course">
                            <a href="#" class="course-img" style="background-image: url(oil.jpg)"> </a>
                            <div class="desc">
                                <h3><a href="#">Cat Minyak</a></h3>
                                <p>Campuran minyak membuat cat jenis ini memberi efek kecerahan warna, cat ini membentuk
                                    pasta liat sehingga memberikan tekstur yang mengesankan</p>
                                <p>Cat minyak memiliki gradasi warna paling lebar, tidak dapat dicapai oleh jenis cat
                                    lain. tetapi cat ini memiliki bau menyengat.</p>
                                <span><a href="https://forms.gle/hTQdtpaTtvbepSRx6"
                                        class="btn btn-primary btn-sm btn-course">Ambil Kelas</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-testimonial" style="background-image: url(images/school.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2><span>Testimonials</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row animate-box">
                            <div class="owl-carousel owl-carousel-fullwidth">

                                <?php 
                                foreach ($list_testimonial as $testimoni){
                                ?>
                                <div class="item">
                                    <div class="testimony-slide active text-center">
                                        <div class="user"
                                            style="background-image: url(<?= $WEB_URL . $testimoni['foto'] ?>)"></div>
                                        <span><?= $testimoni['nama'] ?><br /><small><?= $testimoni['keterangan'] ?></small></span>
                                        <blockquote>
                                            <p>&ldquo;<?= $testimoni['pesan'] ?>&rdquo;</p>
                                        </blockquote>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-blog">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Kegiatan</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
                <div class="row row-padded-mb">
                    <?php 
                foreach ($list_kegiatan as $kegiatan){
                ?>
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-event">
                            <div class="date text-center">
                                <span><?= $kegiatan['tanggal'] ?></span>
                            </div>
                            <h3><a href="#"><?= $kegiatan['nama_kegiatan'] ?></a></h3>
                            <p><?= substr(strip_tags($kegiatan['keterangan']), 0, 150) . "..." ?></p>
                            <p><a href="kegiatan-detail.php?id=<?= $kegiatan['id'] ?>">Selengkapnya</a></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Gallery</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem
                            provident. Odit ab aliquam dolor eius.</p>
                    </div>
                    <?php
                    foreach ($list_karya as $karya) {
                    ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="fh5co-blog animate-box">
                            <a href="<?= $WEB_URL . $karya['foto'] ?>" class="blog-img-holder"
                                style="background-image: url(<?= $WEB_URL . $karya['foto'] ?>)" data-toggle="lightbox"
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
            </div>
        </div>

        <footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg)">
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
    simplyCountdown(".simply-countdown-one", {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
    });

    //jQuery example
    $("#simply-countdown-losange").simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false,
    });
    </script>
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