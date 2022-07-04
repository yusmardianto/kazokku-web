<?php $css = 'kontak-kami' ?>
<?php $title = 'Kontak Kami | Perusahaan Outsourcing IT Profesional | Kazokku' ?>
<?php $description = 'Cari tenaga ahli IT profesional guna menyelesaikan setiap permasalahan dan proyek IT pada bisnis atau usaha Anda? Hubungi Kami sekarang juga | Kazokku.' ?>
<?php $canonical = 'https://www.kazokku.com/kontak-kami.php' ?>

<?php
// error_reporting(0);
require_once("../form/fgcontactform.php");

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
        if($_SERVER['SERVER_NAME'] == 'kazokku.com' || $_SERVER['SERVER_NAME'] == 'www.kazokku.com' ){ // prod server
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

<?php include '../includes/header.php' ?>

<!-- #1 -->
<!-- <section>
  <div class="main-visual-section mt-0">
    <picture>
      <source srcset="/images/hubungi-kami/2022/img-section-1-main-bg.png" type="image/webp">
      <source srcset="/images/hubungi-kami/2022/img-section-1-main-bg.png" type="image/jpg">
      <img width="100%" height="auto" class="w-sm-100" src="/images/hubungi-kami/2022/img-section-1-main-bg.png" class="image-section-1-main" alt="Main Visual" loading='lazy' />
    </picture>
    <div class="main-visual-text-wrapper">
      <div class="text-center">
        <picture>
        <source srcset="/images/hubungi-kami/image-section-1-man-inside-laptop.webp" type="image/webp">
        <img class="w-sm-100" width="530" height="auto" src="/images/hubungi-kami/image-section-1-man-inside-laptop.png" class="" alt="image-section-1-man-inside-laptop" loading='lazy' />
      </picture>
      </div>      
    </div>
  </div>
</section> -->

<!-- #1 -->
<!-- <section>
  <div class="main-visual-section mt-0">
    <picture>
      <source srcset="/images/hubungi-kami/2022/img-section-1-main-bg.png" type="image/webp">
      <source srcset="/images/hubungi-kami/2022/img-section-1-main-bg.png" type="image/jpg">
      <img width="100%" height="auto" class="w-sm-100" src="/images/hubungi-kami/2022/img-section-1-main-bg.png" class="image-section-1-main" alt="Main Visual" loading='lazy' />
    </picture> 
  </div>
</section> -->

<!-- <div class="position-relative"> 
  <div class="position-absolute mt-n5" style="top: 0; left: 0"> 
    <picture>
      <source srcset="/images/hubungi-kami/image-section-2-glow-pink-left.webp" type="image/webp" >
      <img class="d-none d-sm-block d-sm-none d-md-block mt-n5" width="585" height="auto" src="/images/hubungi-kami/image-section-2-glow-pink-left.png" alt="image-section-2-glow-pink-left" />
    </picture>   
  </div>
</div> -->

<!-- #2 -->
<section class="custom-bg-section-1-main-bg">  

  <!-- #ELEMENT OF HALF GLOW CIRCLE -->
  <!-- <div class="d-flex justify-content-center ">
    <div      
      class="w-sm-100 d-none d-sm-block d-sm-none d-md-block"
      style="        
        background:var(--common-hubungi-kami-low);
        width: 483px;
        height: 183px;
        border-radius: 50% / 100%;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        box-shadow:       
          0 0 60px 30px var(--common-hubungi-kami-medium); 
      "
    ></div>   
  </div>     -->

  <div class="hubungi-kami-section mt-n5">  
    <div class="container mt-5"><br><br>
      <ul class="breadcrumb" style="background-color:transparent">
        <li class="breadcrumb-item" style="color:black"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item">Hubungi Kami</li>
      </ul>
      <div class="row mt-15">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
          <!-- <picture>
            <source srcset="/images/hubungi-kami/image-section-2-dot-left.webp" type="image/webp">
            <img  width="32" height="32" src="/images/hubungi-kami/image-section-2-dot-left.png" alt="image-section-2-dot-left" loading='lazy' />
          </picture> -->

          <h2>
              <b>PHP DEVELOPER</b>
          </h2><br><br>
          <h4 class="text-secondary-main mt-3">
              JOB DESCRIPTION
          </h4> 
          <p class="font-weight-bold">Jika Anda ingin mendapatkan informasi lebih lanjut tentang layanan kami, seperti layanan Outsourcing IT Profesional atau WDI untuk kebutuhan IT / transformasi digital perusahaan Anda, silakan menghubungi dan bertanya apapun kepada kami dengan mengisi formulir di bawah ini.</p>

          <!-- #Element of line vertical -->
        </div>  
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
          <?php 
            if (isset($msg)) {
              echo $msg;
            }
          ?>
          <form onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8' id="form-contact">
            <input type='hidden' name='submitted' id='submitted' value='1' />
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
            <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
            <div class="form-container mt-sm-1" style="background: var(--gradient-hubungi-kami); opacity: 0.7;">
              <div class="form-group">
                <label class="font-weight-bold" for="company_name">Nama Lengkap</label>
                <input type="text" name="company_name" class="form-control" placeholder="Nama Perusahaan" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="font-weight-bold" for="email">Alamat E-mail</label>        
                    <input type="email" name="email" class="form-control" placeholder="Alamat E-mail" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="font-weight-bold" for="email">No. Telephone</label>        
                    <input type="number" name="phone" class="form-control" placeholder="No. Telephone" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="font-weight-bold" for="company_name">Posisi yang Dilamar</label>
                <input type="text" name="company_name" class="form-control" placeholder="Nama Perusahaan" required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="font-weight-bold" for="email">Resume / CV</label>        
                    <textarea name="resume" id="resume" class="form-control" cols="30" rows="3"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="font-weight-bold" for="email">Alamat</label>        
                    <textarea name="address" id="address" class="form-control" cols="30" rows="3" placeholder="Tuliskan Alamat Anda"></textarea>
                  </div>
                </div>
              </div>
              <?php if($_SERVER['SERVER_NAME'] == 'kazokku.com' || $_SERVER['SERVER_NAME'] == 'www.kazokku.com'):  ?>
                <div class="g-recaptcha" data-sitekey="6LdqJpwbAAAAACvlWvCx4VKEE6GIOeEfIiq2pzgj"></div>
              <?php else: ?>
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
              <?php endif ?>
              <div class="text-left mt-3">                
                <button data-toggle="modal" type="submit" onclick="ga('send', 'event', 'Button-Kirim', 'Action-Click', 'Button-Kirim-Label');" class="btn pt-1 pb-1 pl-5 pr-5 custom-bg-button-orange text-white transition-duration-500" >
                <h6 class="m-0 d-flex flex-row justify-content-between">
                  <span>Hubungi Kami </span>
                  &nbsp;
                  <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                </h6>
              </button>  
              </div>
            </div>
          </form>
        </div>
      </div>  
      <div class="d-flex flex-row justify-content-end">
        <picture>
          <source srcset="/images/hubungi-kami/image-section-2-dot-right.webp" type="image/webp">
          <img class="mt-3" width="111" height="28" src="/images/hubungi-kami/image-section-2-dot-right.png" alt="image-section-2-dot-right" loading='lazy' />
        </picture>
      </div>
    </div>
  </div>
</section>
<?php include '../includes/footer.php' ?>

<script async="" defer="" src="https://www.google.com/recaptcha/api.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N473SL3W8D"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-N473SL3W8D');
</script>

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
    // console.log("<?= $_SERVER['HTTP_HOST'] ?>");

    // *PLAY WITH SCROLL
    ScrollReveal().reveal('#img-section-2-left',  { delay: 500 });
    
  })
</script>
<?php 
    $add_js = '<script src="/assets/js/contact.js"></script>';
?>
<?php include '../includes/footer-end.php' ?>