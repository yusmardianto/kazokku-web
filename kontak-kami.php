<?php $css = 'kontak-kami' ?>
<?php $title = 'Kontak Kami | Perusahaan Outsource Tenaga Ahli IT Profesional' ?>
<?php $description = 'Cari tenaga ahli IT profesional untuk menyelesaikan permasalahan pada website bisnis atau usaha Anda, kontak Kazokku sekarang juga!' ?>
<?php $canonical = 'https://www.kazokku.com/kontak-kami.php' ?>
<?php include './includes/header.php' ?>
<div class="main-visual-section">
  <picture>
    <source srcset="/images/hubungi-kami/main-visual.webp" type="image/webp">
    <img src="/images/hubungi-kami/main-visual.jpg" class="img-main-visual" alt="Main Visual">
  </picture>
  <div class="main-visual-text-wrapper">
    <h1 class="main-visual-text">Hubungi Kami</h1>
  </div>
</div>
<div class="hubungi-kami-section">
  <img src="/images/bg-dots.png" class="img-dots" alt="dots">
  <div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-8">
        <p>Jika Anda ingin mendapatkan informasi lebih lanjut tentang layanan kami, seperti layanan Haken atau WDI untuk kebutuhan IT / transformasi digital perusahaan Anda, silakan menghubungi dan bertanya apapun kepada kami dengan mengisi formulir di bawah ini.</p>
        <!-- change url -->
        <form action="https://formspree.io/f/mknkvrrk" method="POST" id="form-contact">
          <div class="form-container">
            <div class="form-group">
              <input type="text" name="company_name" class="form-control" placeholder="Nama Perusahaan" required>
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <input type="number" name="phone_number" class="form-control" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Tuliskan Pesan"></textarea>
            </div>
            <div class="form-group">
              <label for="" class="fs-17px mb-0">Anda butuh bantuan Kazokku untuk:</label><br/>
              <small>*Anda boleh memilih lebih dari satu</small>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category" class="custom-control-input" id="category-1" value="Mengembangkan Website">
                    <label class="custom-control-label" for="category-1">Mengembangkan Website</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category" class="custom-control-input" id="category-2" value="Mengembangkan sistem web / maintenance">
                    <label class="custom-control-label" for="category-2">Mengembangkan sistem web / maintenance</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category" class="custom-control-input" id="category-3" value="Memasarkan Web / SEO">
                    <label class="custom-control-label" for="category-3">Memasarkan Web / SEO</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category" class="custom-control-input" id="category-4" value="Memasang atau mengoperasikan iklan di Internet">
                    <label class="custom-control-label" for="category-4">Memasang atau mengoperasikan iklan di Internet</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 mt-lg-0 custom-control custom-checkbox">
                    <input type="checkbox" name="category" class="custom-control-input" id="category-5" value="Mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran">
                    <label class="custom-control-label" for="category-5">Mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran</label>
                  </div>
                </div>
              </div>
            </div>
            <?php if($_SERVER['SERVER_NAME'] == 'kazokku.co.id'):  ?>
              <div class="g-recaptcha" data-sitekey="6LeEbicUAAAAALgHaAxPslHJOKzuppLC7IubKZO5"></div>
            <?php else: ?>
              <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
            <?php endif ?>
            <div class="text-center mt-3">
              <button class="btn-orange-rounded">Hubungi Kami <img src="/images/right-arrow.png" class="img-arrow" alt="detail"></button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
<?php include './includes/footer.php' ?>
<script async="" defer="" src="https://www.google.com/recaptcha/api.js"></script>
<script>
  $(function(){
    var form = document.getElementById('form-contact');
    var checkboxes = form.querySelectorAll('input[type=checkbox]');
    var checkboxLength = checkboxes.length;
    var firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;

    function init() {
        if (firstCheckbox) {
            for (var i = 0; i < checkboxLength; i++) {
                checkboxes[i].addEventListener('change', checkValidity);
            }

            checkValidity();
        }
    }

    function isChecked() {
        for (var i = 0; i < checkboxLength; i++) {
            if (checkboxes[i].checked) return true;
        }

        return false;
    }

    function checkValidity() {
        var errorMessage = !isChecked() ? 'At least one checkbox must be selected.' : '';
        firstCheckbox.setCustomValidity(errorMessage);
    }

    init();

    $("#form-contact").on("submit", function(){
      if(grecaptcha && !grecaptcha.getResponse()){
        alert("Please tick recaptcha");
        return false;
      }
    })
  })
</script>
<?php include './includes/footer-end.php' ?>