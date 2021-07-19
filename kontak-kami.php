<?php $css = 'kontak-kami' ?>
<?php $title = 'Kontak Kami | Perusahaan Outsource Tenaga Ahli IT Profesional' ?>
<?php $description = 'Cari tenaga ahli IT profesional untuk menyelesaikan permasalahan pada website bisnis atau usaha Anda, kontak Kazokku sekarang juga!' ?>
<?php $canonical = 'https://www.kazokku.com/kontak-kami.php' ?>

<?php
// error_reporting(0);
require_once("./form/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@kazokku.com']); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('1aiYsAgEjUV7kdF');

//$formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);

if (isset($_POST['submitted'])) {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        if($_SERVER['SERVER_NAME'] == 'kazokku.com'){ // prod server
          $secret = '6LdqJpwbAAAAAHnhBc7H42NiYPc_JJncoMier27d';
        } else {
          $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'; 
        }
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);

        $responseData = json_decode($verifyResponse);
        if ($responseData->success) {
            if ($formproc->ProcessForm()) {
                $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
            }
        } else {
            $msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
    }
}

?>


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
        <p>Jika Anda ingin mendapatkan informasi lebih lanjut tentang layanan kami, seperti layanan Outsourcing IT Profesional atau WDI untuk kebutuhan IT / transformasi digital perusahaan Anda, silakan menghubungi dan bertanya apapun kepada kami dengan mengisi formulir di bawah ini.</p>
        <!-- change url -->
        <?php 
          if (isset($msg)) {
            echo $msg;
          }
        ?>

        <form action="<?php echo $formproc->GetSelfScript(); ?>" method="POST" id="form-contact">
        <input type='hidden' name='submitted' id='submitted' value='1' />
        <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
        <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
          <div class="form-container">
            <div class="form-group">
              <input type="text" name="company_name" class="form-control" placeholder="Nama Perusahaan" required>
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <input type="number" name="phone" class="form-control" placeholder="Nomor Telepon" required>
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
                    <input type="checkbox" name="category[]" class="custom-control-input" id="category-1" value="Mengembangkan Website">
                    <label class="custom-control-label" for="category-1">Mengembangkan Website</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category[]" class="custom-control-input" id="category-2" value="Mengembangkan sistem web / maintenance">
                    <label class="custom-control-label" for="category-2">Mengembangkan sistem web / maintenance</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category[]" class="custom-control-input" id="category-3" value="Memasarkan Web / SEO">
                    <label class="custom-control-label" for="category-3">Memasarkan Web / SEO</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 custom-control custom-checkbox">
                    <input type="checkbox" name="category[]" class="custom-control-input" id="category-4" value="Memasang atau mengoperasikan iklan di Internet">
                    <label class="custom-control-label" for="category-4">Memasang atau mengoperasikan iklan di Internet</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mt-3 mt-lg-0 custom-control custom-checkbox">
                    <input type="checkbox" name="category[]" class="custom-control-input" id="category-5" value="Mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran">
                    <label class="custom-control-label" for="category-5">Mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran</label>
                  </div>
                </div>
              </div>
            </div>
            <?php if($_SERVER['SERVER_NAME'] == 'kazokku.com'):  ?>
              <div class="g-recaptcha" data-sitekey="6LdqJpwbAAAAACvlWvCx4VKEE6GIOeEfIiq2pzgj"></div>
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