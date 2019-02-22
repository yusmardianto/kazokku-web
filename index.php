<?php
$title = "Mitra Terbaik Industri Digital Indonesia | Web Development | Kazokku";
$description = "Kami membantu Perusahaan dan Pekerja dibidang digital, Web Developer, Web Designer, Penulis Konten,  Ahli SEO dan Pemasaran Online untuk tumbuh dan berkembang, menghubungkan yang terbaik di Indonesia dengan para klien.";
$keywords = "Kazokku";
include "header2.php";
?>

<style type="text/css">

.fadein {
  -webkit-animation-name: fadein; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 1.2s; /* Safari 4.0 - 8.0 */
  -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
  animation-name: fadein;
  animation-duration: 1.2s;
  animation-fill-mode: forwards;
}
.fadeout {
  -webkit-animation-name: fadeout; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 0.5s; /* Safari 4.0 - 8.0 */
  -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
  animation-name: fadeout;
  animation-duration: 0.5s;
  animation-fill-mode: forwards;
}

@-webkit-keyframes fadein { from {opacity: 0;left: -15%;} to {opacity: 1;left: 0;} }
@keyframes fadein { from {opacity: 0;left: -15%;} to {opacity: 1;left: 0;} }
@-webkit-keyframes fadeout { from {opacity: 1;left:0;} to {opacity: 0;left:-15%;} }
@keyframes fadeout { from {opacity: 1;left:0;} to {opacity: 0;left:-15%;} }

</style>
<section class="header-two-2" id="tentang">
  <div class="container-fluid">
      <div class="custom-2">
          <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <h1 class="text-left h4-tentang">Tentang Kazokku</h1>
                    </div>
                    <div class="col-md-6 text-right">
                      <a href="about.php" class="btn btn-kazokku m-t-22">Lihat KAZOKKU Lebih Detail</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <h4 style="color: #333;">
                        Sebagai pelaku industri digital, Kazokku berkomitmen untuk berkontribusi salah satunya dalam
                        dunia pengembangan Web di Indonesia. Komitmen ini telah kami jalankan dengan menghubungkan para perusahaan
                        Web Developer dengan para klien yang membutuhkan, serta menghubungkan mereka dengan Web Developer perseorangan
                        yang sedang mencari pekerjaan.
                      </h4>
                      <div class="text-center"><img src="assets/img/about/7.png" class="img-tentang"></div>
                    </div>
              </div>
          </div>
      </div>
      <div class="arrow-2"><a href="#layanan" class="scrollTo"><img src="assets/img/about/arrow.png" style="height:14px;"></a></div>
  </div>
</section>
<section class="header-two-3" id="layanan">
  <div class="container-fluid">
      <div class="custom-2 block-one">
          <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <img src="assets/img/home/wdi.png">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <br>
                      <h4 class="about-wdi"><b>Web Developer Indonesia (WDI)</b> merupakan situs yang dikelola dan dimiliki oleh PT. Karisma Zona Kreatifku (KAZOKKU).
                        Situs ini berfungsi sebagai portal penyedia informasi terlengkap yang menghubungkan antara para perusahaan Web Developer dengan para klien yang membutuhkan.
                        Selain itu, WDI juga berperan sebagai penghubung antara perusahaan Web Developer dengan para pekerja profesional dibidang digital seperti Web Developer, Web Designer, Ahli SEO dan Pemasaran Online, serta Penulis Konten yang sedang membutuhkan pekerjaan.
                      </h4>
                      <div class="check-wdi">
                        <a href="https://webdev-id.com" class="btn btn-kazokku m-t-22">Cek WDI Sekarang</a>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
</section>

<?php include "footer.php" ?>
