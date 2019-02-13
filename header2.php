<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <script src="assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89630965-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-89630965-1');
    </script>
</head>

<body data-spy="scroll" data-target="#myScrollspy">

<div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">  
                    <a href="#">
                       Kazokku
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">Tentang</a>
                </li>
                <li>
                    <a href="services.php">Pelayanan</a>
                </li>
                <li>
                    <a href="#kontak">Kontak Kami</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="header-two-1">
            <div class="container">
                <a href="index.php">
                    <div class="line-top"></div>
                    <img src="assets/img/home/kazokku.png" class="logo-s logo-fixed" id="logos">
                </a>
                <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                    <span style="margin-left: 2.6em;letter-spacing: 1px;" id="Sinarmenu"></span>
                </button>
            </div>
            <div class="container-fluid">
                <div class="custom-2 pinned">
                    <div class="row">
                        <div class="col-md-5">
                            <nav class="border-menu" id="myScrollspy">
                                <ul class="getidmenu">
                                    <li><a href="#wrapper" class="scrollTo">Home</a></li>
                                    <li><a href="#tentang" class="scrollTo">Tentang KAZOKKU</a></li>
                                    <li><a href="#palayanan" class="scrollTo">Pelayanan</a></li>
                                    <li><a href="#footer" class="scrollTo">Kontak Kami</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <h1 class="text-left margin-top-4em">Kami Membantu Perusahaan Developers dan Para Pembuat Konten Untuk Tumbuh dan Mengembangkan Kemampuan Anda</h1>
                            <h4 class="cutom-shadows font-21">Agensi pengembangan web yang menghubungkan para developers terbaik di Indonesia dengan para klien</h4>
                        </div>
                    </div>
                </div>
                <div class="arrow-1"><a href="#tentang" class="scrollTo"><img src="assets/img/about/arrow.png" style="height:14px;"></a></div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
</div>