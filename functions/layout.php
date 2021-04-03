<?php
function admin_layout_sidebar()
{
    global $WEB_URL;
    $html = <<<HTML
    <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
                <img src="dist/img/icon-sanggar-kreativitas.jpeg" alt="Sanggar Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Sanggar Brahmastra</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="$WEB_URL/images/avatar-placeholder.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">$_SESSION[name]</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Beranda
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Menu</li>
                        <li class="nav-item">
                            <a href="sanggar.php" class="nav-link">
                                <i class="nav-icon far fa-building"></i>
                                <p>
                                    Profil Sanggar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="guru.php" class="nav-link">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Profil Guru
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kegiatan.php" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Kegiatan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="karya.php" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Karya
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="testimonial.php" class="nav-link">
                                <i class="nav-icon far fa-thumbs-up"></i>
                                <p>
                                    Testimonial
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-edit"></i>
                                <p>
                                    Pendaftaran
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buat</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Courses
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buat Baru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lihat Semua</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon fa fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    HTML;
    echo $html;
}
function admin_layout_header($page_title = 'Dashboard', $add_css = '')
{
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$page_title | Sanggar</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    $add_css
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <!-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> -->
            </ul>
        </nav>
HTML;
}

function admin_footer()
{
    echo <<<HTML
    <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="http://firah.id">Brahmastra</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
  HTML;
}

function create_confirmation($btn_text, $btn_colour, $pesan, $target, $float="")
{
    $id_modal = rand(10, 100);
    $html = <<<HTML
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn $btn_colour $float" data-toggle="modal" data-target="#myModal$id_modal">$btn_text</button>

    <!-- Modal -->
    <div id="myModal$id_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi</h5>
                </div>
                <div class="modal-body">
                    <p class="text-left">$pesan</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <a href="$target" class="btn btn-primary">Konfirmasi</a>
                </div>
            </div>

        </div>
    </div>
    HTML;
    echo $html;
}


function layout_header($page_title = "Home"){
    echo <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>BRAHMASTRA ART &mdash; $page_title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="freehtml5.co" />
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet" />

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css" />
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css" />

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <link rel="stylesheet" href="css/owl.theme.default.min.css" />

        <!-- Flexslider  -->
        <link rel="stylesheet" href="css/flexslider.css" />

        <!-- Pricing -->
        <link rel="stylesheet" href="css/pricing.css" />

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css" />

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
  HTML;
}

function layout_navigation(){
    echo <<<HTML
    <nav class="fh5co-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <p class="site">brahmastra-art.com</p>

                            <ul class="fh5co-social">
                                <li>
                                    <a href="https://facebook.com"><i class="icon-facebook2"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com"><i class="icon-twitter2"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/firahpp"><i class="icon-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo">
                                <a href="index.php"><i class="icon-palette"></i>Brahmastra Art<span>.</span></a>
                            </div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="kelas.php">Kelas</a></li>
                                <li><a href="guru.php">Guru</a></li>
                                <li><a href="kegiatan.php">Kegiatan</a></li>
                                <li><a href="gallery.php">Galeri Karya</a></li>
                                <li class="btn-cta"><a href="contact.html"><span>Daftar</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    HTML;
}