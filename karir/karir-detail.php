<?php $css = 'career' ?>
<?php $title = 'Kontak Kami | Perusahaan Outsourcing IT Profesional | Kazokku' ?>
<?php $description = 'Cari tenaga ahli IT profesional guna menyelesaikan setiap permasalahan dan proyek IT pada bisnis atau usaha Anda? Hubungi Kami sekarang juga | Kazokku.' ?>
<?php $canonical = 'https://www.kazokku.com/kontak-kami.php' ?>

<?php
// error_reporting(0);
require_once("../form/fgcareerdetailform.php");

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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                <li class="breadcrumb-item" style="color:black"><a href="/karir">Karir</a></li>
                <li class="breadcrumb-item">Karir Detail</li>
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
                    <div class="ex3">
                        <h4 class="text-secondary-main mt-3">
                            JOB DESCRIPTION
                        </h4>
                        <ul>
                            <li>Understanding and implement requirement of businees users</li>
                            <li>Developing, analyzing and managing PHP Web Application and supporting tools</li>
                            <li>Testing application before handover to QA Team</li>
                            <li>Developing application from scratch or existing PHP Framerowk</li>
                            <li>Designing database if needed for development</li>
                            <li>Coordinating with project team to achieve project performance target</li>
                            <li>Ensuring software run smoothly by user</li>
                        </ul><br>
                        <h4 class="text-secondary-main mt-3">
                            Requirement
                        </h4>
                        <ul>
                            <li>Bachelor/Professional Degree in Engineering : Computer/ Information / Tech / Science /
                                Math or Relevant</li>
                            <li>Strong in PHP MVC, Laravel, CI, Angular, HTML, CSS, JS, NodeJS, CSS</li>
                        </ul>
                    </div>
                    <!-- #Element of line vertical -->
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <?php 
            if (isset($msg)) {
              echo $msg;
            }
          ?>
                    <form onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>'
                        method='post' accept-charset='UTF-8' id="form-contact" enctype="multipart/form-data">
                        <input type='hidden' name='submitted' id='submitted' value='1' />
                        <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                            value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                        <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                        <div class="form-container mt-sm-1"
                            style="background: var(--gradient-hubungi-kami); opacity: 0.7;">
                            <div class="form-group">
                                <label class="font-weight-bold" for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="email">Alamat E-mail</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Alamat E-mail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="phone">No. Telephone</label>
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="No. Telephone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold" for="company_name">Posisi yang Dilamar</label>
                                <select name="jobapply[]" multiple class="form-control multiple-select">
                                    <option value="php">PHP Developer</option>
                                    <option value="golang">Golang Developer</option>
                                    <option value="bootcamp">Bootcamp Programmer</option>
                                    <option value="project">Project Manager</option>
                                    <option value="ui/ux">UI/UX Designer</option>
                                    <option value="dotnet">.Net Developer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="d-flex flex-row ">
                                  <div class="flex-grow-1">
                                    <label for="" class="fs-17px mb-0 font-weight-bold">Resume / CV</label><br/>
                                  </div>
                                  <div class="justify-content-end text-secondary-main" >
                                    <small>*JPEG, PNG, Pdf, max 5MB</small>
                                  </div>
                                </div>
                                <div id="drop_zone">
                                    <p><a type="button" id="btn_file_pick" style="color:blue">Upload File</a></p>
                                    <p style="color:grey; margin-top:-15px">or Drag and Drop Here</p>
                                    <p id="file_info"></p>
                                    <input class="form-control" type="file" id="selectfile">
                                    <p id="message_info"></p>
                                </div>
                            </div>
                            <?php if($_SERVER['SERVER_NAME'] == 'kazokku.com' || $_SERVER['SERVER_NAME'] == 'www.kazokku.com'):  ?>
                            <div class="g-recaptcha" data-sitekey="6LdqJpwbAAAAACvlWvCx4VKEE6GIOeEfIiq2pzgj"></div>
                            <?php else: ?>
                            <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                            <?php endif ?>
                            <div class="text-left mt-3">
                                <button data-toggle="modal" type="submit"
                                    onclick="ga('send', 'event', 'Button-Kirim', 'Action-Click', 'Button-Kirim-Label');"
                                    class="btn pt-1 pb-1 pl-5 pr-5 custom-bg-button-orange text-white transition-duration-500">
                                    <h6 class="m-0 d-flex flex-row justify-content-between">
                                        <span>Apply</span>
                                        &nbsp;
                                        <img class="mt-1-half" width="16" height="8"
                                            src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                    </h6>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><br><br><br><br>
            <h3 class="text-center">Screening Question</h3><br><br><br>
            <form onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post'
                accept-charset='UTF-8' id="form-contact">
                <input type='hidden' name='submitted' id='submitted' value='1' />
                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                    value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                <div class="mt-sm-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">How long have you been working in related field ?</label>
                                <select class="form-control" name="cars" id="cars">
                                    <option value="0">- Select Years -</option>
                                    <option value="1">1 Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years</option>
                                    <option value="6">6 Years</option>
                                    <option value="7">7 Years</option>
                                    <option value="8">8 Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Where did you first hear about this vacancy ?</label>
                                <select class="form-control" name="cars" id="cars">
                                    <option value="0">- Select Years -</option>
                                    <option value="1">1 Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years</option>
                                    <option value="6">6 Years</option>
                                    <option value="7">7 Years</option>
                                    <option value="8">8 Years</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">How long have you been working in related field ?</label>
                                <select class="form-control" name="cars" id="cars">
                                    <option value="0">- Select Years -</option>
                                    <option value="1">1 Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years</option>
                                    <option value="6">6 Years</option>
                                    <option value="7">7 Years</option>
                                    <option value="8">8 Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Where did you first hear about this vacancy ?</label>
                                <select class="form-control" name="cars" id="cars">
                                    <option value="0">- Select Years -</option>
                                    <option value="1">1 Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years</option>
                                    <option value="6">6 Years</option>
                                    <option value="7">7 Years</option>
                                    <option value="8">8 Years</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">How long have you been working in related field ?</label>
                                <select class="form-control" name="cars" id="cars">
                                    <option value="0">- Select Years -</option>
                                    <option value="1">1 Years</option>
                                    <option value="2">2 Years</option>
                                    <option value="3">3 Years</option>
                                    <option value="4">4 Years</option>
                                    <option value="5">5 Years</option>
                                    <option value="6">6 Years</option>
                                    <option value="7">7 Years</option>
                                    <option value="8">8 Years</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="d-flex flex-row justify-content-end">
                <picture>
                    <source srcset="/images/hubungi-kami/image-section-2-dot-right.webp" type="image/webp">
                    <img class="mt-3" width="111" height="28" src="/images/hubungi-kami/image-section-2-dot-right.png"
                        alt="image-section-2-dot-right" loading='lazy' />
                </picture>
            </div>
        </div>
    </div>
</section>
<?php include '../includes/footer.php' ?>

<script async="" defer="" src="https://www.google.com/recaptcha/api.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N473SL3W8D"></script>

<!-- Select -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(".multiple-select").select2({
        placeholder: "Pilih Posisi yang Dilamar",
        allowClear: true,
        maximumSelectionLength: 3
    });
</script>

<script>
var fileobj;
$(document).ready(function() {
    $("#drop_zone").on("dragover", function(event) {
        event.preventDefault();
        event.stopPropagation();
        return false;
    });
    $("#drop_zone").on("drop", function(event) {
        event.preventDefault();
        event.stopPropagation();
        fileobj = event.originalEvent.dataTransfer.files[0];
        var fname = fileobj.name;
        var fsize = fileobj.size;
        if (fname.length > 0) {
            document.getElementById('file_info').innerHTML = '<br>' + fname + " - " + bytesToSize(fsize);
        }
        document.getElementById('selectfile').files[0] = fileobj;
        document.getElementById('btn_upload').style.display = "inline";
    });
    $('#btn_file_pick').click(function() {
        /*normal file pick*/
        document.getElementById('selectfile').click();
        document.getElementById('selectfile').onchange = function() {
            fileobj = document.getElementById('selectfile').files[0];
            var fname = fileobj.name;
            var fsize = fileobj.size;
            if (fname.length > 0) {
                document.getElementById('file_info').innerHTML = "File name : " + fname +
                    ' <br>File size : ' + bytesToSize(fsize);
            }
            document.getElementById('btn_upload').style.display = "inline";
        };
    });
    $('#btn_upload').click(function() {
        if (fileobj == "" || fileobj == null) {
            alert("Please select a file");
            return false;
        } else {
            ajax_file_upload(fileobj);
        }
    });
});

function ajax_file_upload(file_obj) {
    if (file_obj != undefined) {
        var form_data = new FormData();
        form_data.append('upload_file', file_obj);
        $.ajax({
            type: 'POST',
            url: 'upload.php',
            contentType: false,
            processData: false,
            data: form_data,
            beforeSend: function(response) {
                $('#message_info').html("Uploading your file, please wait...");
            },
            success: function(response) {
                $('#message_info').html(response);
                alert(response);
                $('#selectfile').val('');
            }
        });
    }
}

function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (bytes == 0) return '0 Byte';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}
</script>

<script>
$(function() {
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

    $("#form-contact").on("submit", function() {
        if (grecaptcha && !grecaptcha.getResponse()) {
            alert("Please tick recaptcha");
            return false;
        }
    })
    // console.log("<?= $_SERVER['HTTP_HOST'] ?>");

    // *PLAY WITH SCROLL
    ScrollReveal().reveal('#img-section-2-left', {
        delay: 500
    });

})

function file_browse(e) {
    var max = 1024 * 1024 * 5;
    var ext = e.value.match(/\.([^\.]+)$/)[1];

    if (e.files && e.files[0].size > max) {
        alert("Sorry, Maximal file size pdf 5MB.");
        e.value = null;
    } else {
        switch (ext) {
            case 'pdf':
                break;
            case 'jpg':
                break;
            case 'jpeg':
                break;
            case 'png':
                break;
            default:
                alert('only pdf, jpg, jpeg, png file that be allowed');
                e.value = '';
        }
    }
}
</script>
<?php 
    $add_js = '<script src="/assets/js/contact.js"></script>';
?>
<?php include '../includes/footer-end.php' ?>