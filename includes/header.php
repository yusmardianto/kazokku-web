<?php 
  function active($current_page) {
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url_temporary = end($url_array);
    if (strpos($url_temporary, '.php')) {
        $url_temporary_array = explode('.', $url_temporary);
        $url = current($url_temporary_array);
    } else {
        $url = $url_temporary;
    }  
    // $url_previous = prev($url_array);  
    if($current_page == $url){
        echo 'active'; 
    }
  } 
  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="web, mobile apps, digital, internet, kazokku"
    />
    <meta name="title" content="<?= $title ?>"/>
    <meta name="description" content="<?= $description ?>"/>
    <meta name="author" content="Kazokku Indonesia" />
    <meta name="canonical" content="<?= $canonical ?>" />
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" as="font" href="/fonts/BodoniSvtyTwoITCTT-Bold.ttf" crossorigin>
    <link rel="preload" as="font" href="/fonts/Novecentosanswide-Medium.otf" crossorigin>
    <link rel="preload" as="style" href="/css/main.css">
    <link rel="preload" as="style" href="/css/custom.css">
    <link rel="preload" as="style" href="/css/<?= $css; ?>.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="preload" as="style" onload="this.rel='stylesheet'">
    <link href="/css/main.css" rel="stylesheet" />
    <link href="/css/custom.css" rel="stylesheet" />
    <link href="/css/<?= $css; ?>.css" rel="stylesheet" />
    <script>
      (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
          i[r] ||
          function () {
            (i[r].q = i[r].q || []).push(arguments);
          }),
          (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(
        window,
        document,
        "script",
        "https://www.google-analytics.com/analytics.js",
        "ga"
      );

      ga("create", "UA-89630965-1", "auto");
      ga("send", "pageview");
    </script>
  </head>
  <body>
    <nav id='header' class="navbar navbar-expand-lg bg-white">
      <div class="container rounded-pill bg-blue-dark bg-sm-transparent pl-5 pr-5 pt-2 pb-2" >
        <a class="navbar-brand" href="/">
          <picture>
            <source srcset="/images/logo-kazokku.svg" type="image/svg+xml">
            <img src="/images/logo-kazokku.png" width="156" height="30" id="nav-logo" alt="kazokku logo">
          </picture>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav mr-0 ml-auto">
            <li class="nav-item <?php active('') ?>">
              <a class="nav-link" href="/">
                <h5>Home</h5>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php active('tentang-kami') ?>">
              <a class="nav-link" href="/tentang-kami.php"><h5>Tentang Kazok<span class="flip-character">k</span>u</h5></a>
            </li>
            <li class="nav-item <?php active('layanan-tenaga-ahli-it') ?>">
              <a class="nav-link" href="/layanan-tenaga-ahli-it.php"><h5>OUTSOURCING IT</h5></a>
            </li>
            <li class="nav-item  <?php active('hubungi-kami') ?>">
              <a class="nav-link" href="/kontak-kami.php"><h5>Hubungi Kami</h5></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>