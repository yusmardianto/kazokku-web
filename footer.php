  <div class="style1" id="footer">
    <div class="container">
        <section>
          <div class="row">
            <div class="col-md-4">
                <img src="assets/img/about/1.png">
            </div>
            <div class="col-md-8">
                <h3 class="colorPutih layanan-kami">Layanan Kami Lainnya</h3>
                <div class="row">
                  <div class="col-xs-4 col-md-4">
                    <a class="link-layanan-img" target="_blank" href="https://webdev-id.com">
                      <img src="assets/img/about/2.png" class="layanan-img">
                    </a>
                  </div>
                  <div class="col-xs-4 col-md-4">
                    <a class="link-layanan-img" target="_blank" href="#">
                      <img src="assets/img/about/3_.png" class="layanan-img">
                    </a>
                  </div>
                  <div class="col-xs-4 col-md-4">
                    <a class="link-layanan-img" target="_blank" href="https://jualbeliweb.id">
                      <img src="assets/img/about/4.png" class="layanan-img">
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </section>
      </div>
  </div>
  <div class="container">
    <section id="kontak">
      <div class="row">
        <div class="col-md-5">
           <div class="row">
             <div class="col-md-12">
              <ul class="list-inline font16">
                <li><a href="index.php" class="link1">Home</a></li>
                <li><a href="about.php" class="link1">Tentang Kazokku</a></li>
                <li><a href="services.php" class="link1">Layanan</a></li>
                <li><a href="index.php" class="link1">Kontak Kami</a></li>
              </ul>
             </div>
           </div>
           <div class="row">
             <div class="col-md-12">
              <p class="text-footer colorBasic font16"><b>KAZOKKU (PT Karisma Zona Kreatifku)</b></p>
              <p class="colorBasic">Ad Premier Building  19th Floor. Jalan TB. simatupang No. 5
                <br class="hidden-xs">Ragunan, Ps. Minggu, Jakarta Selatan, Indonesia 12550
                <br class="hidden-xs">www.kazokku.com</p>
             </div>
           </div>
        </div>
        <div class="col-md-7">
            <p class="colorBasic line-h-2"><b>Kazokku</b> merupakan agensi pengembangan web yang berlokasi di Jakarta. Mempunyai mimpi untuk membentuk komunitas web developer terbesar di Indonesia, Kazokku berkomitmen untuk mendukung dunia pengembangan web di Indonesia serta mendukung seluruh perusahaan web developer dan para web developer profesional di Tanah Air untuk terus tumbuh dan berkembang dengan sukses.      </p>
        </div>
      </div>
    </section>
  </div>



    <!-- /container -->
    <script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.js"></script>
    <script src="assets/js/jquery.matchHeight.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.viewbox.min.js"></script>
    <script type="text/javascript">
    $(function(){
      $('.image-link').viewbox();
    });
    $(".scrollTo").on('click', function(e) {
      e.preventDefault();
      var target = $(this).attr('href');
      $('html, body').animate({
        scrollTop: ($(target).offset().top)
      }, 1200);
    });

    if ( $(window).width() > 1600) {

        window.onscroll = function() {myFunction()};
        function myFunction() {
        // 2720
        if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500 ) {
            document.getElementById("myScrollspy").classList.remove("fadein");
            document.getElementById("myScrollspy").classList.add("fadeout");
        } else {
            document.getElementById("myScrollspy").classList.add("fadein");
            document.getElementById("myScrollspy").classList.remove("fadeout");
        }}

    } else if ( $(window).width() < 767 ) {

        document.getElementById("myScrollspy").style.display = "none";

    } else {

        window.onscroll = function() {myFunction()};
        function myFunction() {
        // 2720
        if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1550) {
            document.getElementById("myScrollspy").classList.remove("fadein");
            document.getElementById("myScrollspy").classList.add("fadeout");
        } else {
            document.getElementById("myScrollspy").classList.add("fadein");
            document.getElementById("myScrollspy").classList.remove("fadeout");
        }}

    }
    </script>
</body>

</html>
