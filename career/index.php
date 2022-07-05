<?php $css = 'home' ?>
<?php $title = 'Outsourcing IT FAQ | Kazokku' ?>
<?php $description = 'Berikut daftar pertanyaan (FAQ) terkait jasa outsourcing IT Kazokku yang sering diajukan klien. Pelajari & temukan jawaban atas pertanyaan Anda di sini!' ?>
<?php $canonical = 'https://kazokku.com/faq.php' ?>

<div class=""
    style=" background-color: rgb(255,242,223);background-image: radial-gradient(circle, rgba(255,242,223,1) 0%, rgba(255,255,255,1) 100%);">
    <?php include '../includes/header.php' ?>
</div>

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

<br><br><br><br><br><br><br><br><br><br><br><br>
<!-- #2 -->
<div class="position-relative d-none d-sm-block d-sm-none d-md-block">
    <div class="position-absolute" style="top: 0; right: 0">
        <picture>
            <source srcset="/images/home/image-section-2-blue-gradient-radial.webp" type="image/webp">
            <img width="350" height="550" src="/images/home/image-section-2-blue-gradient-radial.svg"
                alt="complementary" />
        </picture>
    </div>
</div>
<div class="position-relative ">
    <div class="position-absolute" style="top: 400px; left: 0;">
        <picture>
            <source srcset="/images/outsourching-it/bg-art-left.webp" type="image/webp">
            <img class="mb-n5 d-none d-sm-block d-sm-none d-md-block" src="/images/outsourching-it/bg-art-left.png"
                alt="complementary" />
        </picture>
    </div>
</div>
<div class="position-relative ">
    <div class="position-absolute" style="top: 1450px; left: 0;">
        <picture>
            <source srcset="/images/outsourching-it/image-complement-left-section-4.webp" type="image/webp">
            <img class="mb-n5 d-none d-sm-block d-sm-none d-md-block" src="/images/outsourching-it/bg-art-left.png"
                alt="complementary" />
        </picture>
    </div>
</div>
<div class="position-relative ">
    <div class="position-absolute" style="top: 2250px; right: 0;">
        <img class="mb-n5 d-none d-sm-block d-sm-none d-md-block"
            src="/images/outsourching-it/image-section-2-dot-right.png" alt="complementary" width="70%" />
    </div>
</div>
<div class="position-relative ">
    <div class="position-absolute" style="top: 620px; right: 0;">
        <picture>
            <source srcset="/images/outsourching-it/image-complement-right-section-4.webp" type="image/webp">
            <img class="mb-n5 d-none d-sm-block d-sm-none d-md-block"
                src="/images/outsourching-it/image-complement-right-section-4.png" alt="complementary" />
        </picture>
    </div>
</div>
<div class=""
    style=" background-color: rgb(255,242,223);background-image: radial-gradient(circle, rgba(255,242,223,1) 0%, rgba(255,255,255,1) 100%);">
    <section class="container ">
        <div class="row mt-15">
            <div class="col-sm-12 col-md-6 col-md-6 col-lg-6 col-xl-6">
                <h4 class="text-secondary-main mt-sm-1 text-uppercase">
                    Outsourcing IT FAQ
                </h4>
                <p>
                    Apakah Anda sedang mempertimbangkan untuk menggunakan layanan Outsourcing IT? Berikut daftar
                    pertanyaan yang sering ditanyakan terkait layanan Outsourcing IT dan kami sudah menyediakan jawaban
                    terkait pertanyaan-pertanyaan yang sering diajukan tersebut. Semoga dapat membantu Anda.
                </p>
                <p>
                    Jika Anda memiliki pertanyaan lain di luar dari daftar pertanyaan berikut, silahkan hubungi kami.
                </p>
            </div>
            <div class="position-relative ">
                <div class="position-absolute" style="top: 230px; left: 30px;">
                    <picture>
                        <source srcset="/images/hubungi-kami/image-section-2-circle-mozaik-right.webp"
                            type="image/webp">
                        <img class="mb-n5 d-none d-sm-block d-sm-none d-md-block"
                            src="/images/hubungi-kami/image-section-2-circle-mozaik-right.png" alt="complementary"/>
                    </picture>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xl-4 text-center">
                <img id="img-section-2-mens" width=150% style="margin-top:-100px"
                    src="/assets/img/faq/malepose_1@3x.png" alt="img-section-2-mens.png" loading="lazy">
            </div>
        </div>
        <div style="margin-top:-80px">
            <div class="position-relative ">
                <div class="position-absolute" style="top: 150px; left: 0; z-index:2;">
                    <picture>
                        <source srcset="/images/outsourching-it/image-complement-1.webp" type="image/webp">
                        <img class="mb-n5 d-none d-sm-block d-sm-none d-md-block"
                            src="/images/outsourching-it/image-complement-1.png" alt="complementary" />
                    </picture>
                </div>
            </div>

            <!-- #5 -->
        <section>
            <div class="container mt-5 pb-5">
                <div class="row ">
                    <div class="col-sm-12 col-md-12 col-md-12 col-lg-12 col-xl-12">
                        <h2 class="text-secondary-main mt-4">
                            Manfaat Menggunakan Layanan<br>Outsourcing UI UX Designer Profesional
                        </h2>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-12 col-md-6 col-md-6 col-lg-6 col-xl-6 ">
                        <fieldset id='home-card-portofolio-kami-1' class="card-info-with-fieldset h-89"
                            style="background-color: rgb(244 209 215); ">
                            <div class="control-group mt-4">
                                <h5>
                                    <b>Tidak Perlu Mengeluarkan Biaya Pelatihan</b>
                                </h5>
                                <p>
                                    Perusahaan tidak perlu lagi mengeluarkan biaya pelatihan untuk karyawan outsourcing karena
                                    tenaga IT yang disediakan oleh penyedia jasa outsourcing adalah mereka yang sudah siap
                                    bekerja dan sesuai dengan kebutuhan proyek Anda
                                </p>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm-12 col-md-6 col-md-6 col-lg-6 col-xl-6 ">
                        <fieldset id='home-card-portofolio-kami-2' class="card-info-with-fieldset  h-89"
                            style="background-color: rgb(244 209 215); ">
                            <div class="control-group mt-4">
                                <h5>
                                    <b>Menghemat Biaya dan Beban Rekrutmen</b>
                                </h5>
                                <p>
                                    Anda tidak perlu repot-repot melakukan semua proses rekrutmen yang panjang, karena itu
                                    menjadi tanggung jawab perusahaan penyedia layanan outsourcing
                                </p>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-5">
            <div class="row text-center">
                <div class="col-sm-12 col-md-12 col-md-12 col-lg-12 col-xl-12">
                <h3 class="mt-3 mb-3">
                   Why Join Us
                </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xxl-4">                      
                <figure class=" rounded-xl text-center mt-3 mb-1 linear-gradient-blue border-blue-main h-100">
                    <picture>
                        <source media="(min-width: 1024px)" srcset="/images/outsourching-it/2022/img-section-6-biaya-fleksibel.png">
                        <source media="(max-width: 640px)" srcset="/images/outsourching-it/2022/img-section-6-biaya-fleksibel.png">
                        <img class="ml-0 mr-0 mt-5 w-sm-100" width="224" height="auto" src="/images/outsourching-it/2022/img-section-6-biaya-fleksibel.png" alt="main-image" loading="lazy" >
                    </picture> 
                    <figcaption class="pt-1 pl-4 pr-4 text-left">
                        <h3 class="m-3 text-dark text-left">
                        Proses rekrutmen dapat dijalankan dengan biaya yang fleksibel
                        </h3>          
                        <button data-toggle="modal" data-target="#modal1" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                            <h6 class="m-0 d-flex flex-row justify-content-between">
                            <span>See Details </span>
                            &nbsp;
                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                            </h6>
                        </button>  
                    </figcaption>
                </figure>                                   
                </div>
                <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xl-4">                  
                    <figure class=" rounded-xl text-center mt-3 mb-1 linear-gradient-blue border-blue-main h-100">
                    <picture>
                        <source media="(min-width: 1024px)" srcset="/images/outsourching-it/2022/img-section-6-biaya-terkendali.png">
                        <source media="(max-width: 640px)" srcset="/images/outsourching-it/2022/img-section-6-biaya-terkendali.png">
                        <img class="ml-0 mr-0 mt-5 w-sm-100" width="224" height="auto" src="/images/outsourching-it/2022/img-section-6-biaya-terkendali.png" alt="main-image" loading="lazy" >
                    </picture> 
                    <figcaption class="pt-1 pl-4 pr-4 text-left">
                        <h3 class="m-3 text-dark text-left">
                            Biaya operasional tenaga kerja menjadi lebih terkendali
                        </h3>
                        <button type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" data-toggle="modal" data-target="#modal2">
                            <h6 class="m-0 d-flex flex-row justify-content-between">
                            <span>See Details </span>
                            &nbsp;
                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                            </h6>
                        </button>             
                    </figcaption>
                    </figure>                      
                </div>
                <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xl-4">                  
                    <figure class=" rounded-xl text-center mt-3 mb-1 linear-gradient-blue border-blue-main h-100">
                        <picture>
                            <source media="(min-width: 1024px)" srcset="/images/outsourching-it/2022/img-section-6-fokus-bisnis.png">
                            <source media="(max-width: 640px)" srcset="/images/outsourching-it/2022/img-section-6-fokus-bisnis.png">
                            <img class="ml-0 mr-0 mt-5 w-sm-100" width="224" height="auto" src="/images/outsourching-it/2022/img-section-6-fokus-bisnis.png" alt="main-image" loading="lazy" >
                        </picture> 
                        <figcaption class="pt-1 pl-4 pr-4 text-left">
                            <h3 class="m-3 text-dark text-left">
                            Perusahaan dapat fokus pada kegiatan bisnis
                            </h3>
                            <button type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" data-toggle="modal" data-target="#modal3">
                            <h6 class="m-0 d-flex flex-row justify-content-between">
                                <span>See Details </span>
                                &nbsp;
                                <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                            </h6>
                            </button>               
                        </figcaption>
                    </figure>             
                </div>
            </div>
        </section>
        <section class="container mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xl-4">                   
            <figure class=" rounded-xl text-center mt-3 linear-gradient-blue border-blue-main h-100">
                <picture>
                    <source media="(min-width: 1024px)" srcset="/images/outsourching-it/2022/img-section-7-kelola-resiko-jadilebihbaik.png">
                    <source media="(max-width: 640px)" srcset="/images/outsourching-it/2022/img-section-7-kelola-resiko-jadilebihbaik.png">
                    <img class="ml-0 mr-0 mt-5" width="224" height="192" src="/images/outsourching-it/2022/img-section-7-kelola-resiko-jadilebihbaik.png" alt="main-image" loading="lazy" >
                </picture> 
                <figcaption class="pt-1 pl-4 pr-4 text-left">
                    <h3 class="m-3 text-dark text-left">
                    Risiko dikelola dengan  lebih baik
                    </h3>
                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                    <h6 class="m-0 d-flex flex-row justify-content-between">
                        <span>See Details </span>
                        &nbsp;
                        <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                    </h6>
                    </button>             
                </figcaption>
            </figure>               
            </div>
            <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xl-4">                  
                <figure class="rounded-xl text-center mt-3 linear-gradient-blue border-blue-main h-100">
                <picture>
                    <source media="(min-width: 1024px)" srcset="/images/outsourching-it/2022/img-section-7-kinerja-maksimal.png">
                    <source media="(max-width: 640px)" srcset="/images/outsourching-it/2022/img-section-7-kinerja-maksimal.png">
                    <img class="ml-0 mr-0 mt-5" width="224" height="auto" src="/images/outsourching-it/2022/img-section-7-kinerja-maksimal.png" alt="main-image" loading="lazy" >
                </picture> 
                <figcaption class="pt-1 pl-4 pr-4 text-left">
                    <h3 class="m-3 text-dark text-left">
                        Kinerja yang maksimal
                    </h3>
                    <button data-toggle="modal" data-target="#modal5" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                        <h6 class="m-0 d-flex flex-row justify-content-between">
                        <span>See Details </span>
                        &nbsp;
                        <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                        </h6>
                    </button>  
                </figcaption>
                </figure>                   
            </div>
            <div class="col-sm-12 col-md-4 col-md-4 col-lg-4 col-xl-4">                  
                <figure class=" rounded-xl text-center mt-3 linear-gradient-blue border-blue-main h-100">
                <picture>
                    <source media="(min-width: 1024px)" srcset="/images/outsourching-it/2022/img-section-7-latest-tech.png">
                    <source media="(max-width: 640px)" srcset="/images/outsourching-it/2022/img-section-7-latest-tech.png">
                    <img class="ml-0 mr-0 mt-5" width="224" height="192" src="/images/outsourching-it/2022/img-section-7-latest-tech.png" alt="main-image" loading="lazy" >
                </picture> 
                <figcaption class="pt-1 pl-4 pr-4 text-left">
                    <h3 class="m-3 text-dark text-left">
                        Penerapan teknologi terbaru dengan cepat
                    </h3>
                    <button data-toggle="modal" data-target="#modal6" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                        <h6 class="m-0 d-flex flex-row justify-content-between">
                        <span>See Details </span>
                        &nbsp;
                        <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                        </h6>
                    </button>              
                </figcaption>
                </figure>                  
            </div>
            </div>
        </section>
        <br><br><br>
        
        <!-- Open Position -->
        <section>
            <div  class="container mt-5 pb-5">
                <div class="row ">
                <div class="col-sm-12 col-md-12 col-md-12 col-lg-12 col-xl-12">
                    <H2 class="text-secondary-main mt-4">
                        OPEN POSITION
                    </H2>
                </div>
                <section class="container mt-6">
                    <div class="row">
                        <div class="col-md-4">                   
                            <figcaption>
                                <h4 style="margin-top:50px">
                                    PHP DEVELOPER
                                </h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>South Jakarta, Indonesia</p>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>Full Time</p><br>
                                    </div> 
                                </div>
                                <a href="/career/career-details.php"> 
                                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                                        <h6 class="m-0 d-flex flex-row justify-content-between">
                                            <span>See Details </span>
                                            &nbsp;
                                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                        </h6>
                                    </button>
                                </a><br><br>
                                <hr>          
                            </figcaption>              
                        </div>
                        <div class="col-md-4">                   
                            <figcaption>
                                <h4 style="margin-top:50px">
                                    GOLANG DEVELOPER
                                </h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>South Jakarta, Indonesia</p>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>Full Time</p><br>
                                    </div> 
                                </div>
                                <a href="/career/career-details.php"> 
                                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                                        <h6 class="m-0 d-flex flex-row justify-content-between">
                                            <span>See Details </span>
                                            &nbsp;
                                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                        </h6>
                                    </button>
                                </a><br><br>
                                <hr>          
                            </figcaption>              
                        </div>
                        <div class="col-md-4">                   
                            <figcaption>
                                <h4 style="margin-top:50px">
                                    BOOTCAMP PROGRAMMER
                                </h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>South Jakarta, Indonesia</p>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>Full Time</p><br>
                                    </div> 
                                </div>
                                <a href="/career/career-details.php"> 
                                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                                        <h6 class="m-0 d-flex flex-row justify-content-between">
                                            <span>See Details </span>
                                            &nbsp;
                                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                        </h6>
                                    </button>
                                </a><br><br>
                                <hr>          
                            </figcaption>              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">                   
                            <figcaption>
                                <h4 style="margin-top:50px">
                                    PROJECT MANAGER
                                </h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>South Jakarta, Indonesia</p>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>Full Time</p><br>
                                    </div> 
                                </div>
                                <a href="/career/career-details.php"> 
                                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                                        <h6 class="m-0 d-flex flex-row justify-content-between">
                                            <span>See Details </span>
                                            &nbsp;
                                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                        </h6>
                                    </button>
                                </a><br><br>
                                <hr>          
                            </figcaption>              
                        </div>
                        <div class="col-md-4">                   
                            <figcaption>
                                <h4 style="margin-top:50px">
                                    UI / UX DESIGNER
                                </h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>South Jakarta, Indonesia</p>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>Full Time</p><br>
                                    </div> 
                                </div>
                                <a href="/career/career-details.php"> 
                                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                                        <h6 class="m-0 d-flex flex-row justify-content-between">
                                            <span>See Details </span>
                                            &nbsp;
                                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                        </h6>
                                    </button>
                                </a><br><br>
                                <hr>          
                            </figcaption>              
                        </div>
                        <div class="col-md-4">                   
                            <figcaption>
                                <h4 style="margin-top:50px">
                                    .NET DEVELOPER
                                </h4><br><br>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>South Jakarta, Indonesia</p>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-4">

                                    </div> 
                                    <div class="col-md-8">
                                        <p>Full Time</p><br>
                                    </div> 
                                </div>
                                <a href="/career/career-details.php"> 
                                    <button data-toggle="modal" data-target="#modal4" type="button" class="btn pt-1 pb-1 custom-bg-button-orange text-white transition-duration-500" >
                                        <h6 class="m-0 d-flex flex-row justify-content-between">
                                            <span>See Details </span>
                                            &nbsp;
                                            <img class="mt-1-half" width="16" height="8" src="/images/common/icon-white-right-arrow.png" loading="lazy" />
                                        </h6>
                                    </button>
                                </a><br><br>
                                <hr>          
                            </figcaption>              
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- FAQ -->
        <div>
            <hr>
            <div>
                <div>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Apa keunggulan layanan Outsourcing IT dari Kazokku?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Kami dapat menyediakan kebutuhan tenaga IT profesional untuk penempatan di berbagai
                                jenis proyek
                                digital sekaligus sesuai dengan kebutuhannya yang mendesak, kami juga mampu menyediakan
                                tenaga
                                IT yang dibutuhkan dalam waktu singkat.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Apa saja spesialisasi tenaga IT yang dapat disediakan oleh Kazokku?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Saat ini kami memiliki tenaga IT dengan spesialisasi sebagai berikut; Backend Developer,
                                Frontend Developer, Mobile Developer, QA / Tester, IT Security, DevOps, Project Manager,
                                Business Analyst, System Analyst, dan Digital Marketing. Adapun spesialisasi untuk
                                developer
                                kami meliputi PHP Developer, Java Developer, Nodejs Developer, React Developer, Golang
                                Developer, .NET Developer dan Angular Developer, Flutter Developer.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Apa status karyawan yang disediakan oleh Kazokku untuk klien?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Statusnya adalah karyawan Kazokku sebagai karyawan outsource yang dipekerjakan untuk
                                klien
                                selama kontrak berlangsung.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Berapa lama kontrak kerja yang dapat diterapkan?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Kontrak kerja dapat diterapkan mulai dari 3 bulan, 6 bulan, 1 tahun, atau lebih.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana karyawan bekerja?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Karyawan bekerja mengikuti peraturan yang berlaku di kantor klien, termasuk jam kerja,
                                cara
                                bekerja, perizinan, pengajuan cuti dan lain sebagainya.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Siapa yang akan mengelola tugas atau pekerjaan karyawan?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Tugas dan pengelolaan pekerjaan karyawan sepenuhnya kami serahkan kepada klien, termasuk
                                pekerjaan sehari-hari, mingguan, dan bulanan.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">
                        Di mana karyawan bekerja?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Lokasi atau cara bekerja karyawan menyesuaikan dengan kebutuhan klien. Karyawan dapat
                                bekerja di
                                kantor Kazokku, di kantor klien, atau secara remote.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion">
                        <img width=3% src="/assets/img/faq/img@3x.png" alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana jika klien ingin merekrut karyawan menjadi karyawan tetap klien?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Klien dapat merekrut karyawan Kazokku menjadi karyawan tetap setelah kontrak yang
                                berlangsung
                                selama minimal 6 bulan selesai. Namun akan ada biaya rekrutmen yang perlu dibayarkan
                                oleh klien.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana jika karyawan yang diberikan memutuskan untuk mengundurkan diri?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Kami akan menyediakan karyawan pengganti sesuai dengan kualifikasi yang telah disepakati
                                di awal
                                tanpa adanya biaya tambahan.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana jika gaji karyawan pengganti lebih tinggi?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Apabila penggantian disepakati maka kami akan melakukan penyesuaian kontrak kerja dan
                                nilai yang
                                ditagihkan kepada klien.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">Bagaimana jika klien ingin menghentikan hubungan
                        kerja dengan karyawan?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Penghentian hubungan kerja dapat dilakukan oleh klien sesuai dengan ketentuan yang
                                diatur dalam
                                kontrak. Klien dapat berdiskusi dengan tim Kazokku dan menginfokan terlebih dahulu
                                minimal dalam
                                waktu 30 hari terkait alasan penghentian hubungan kerja.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">Berapa lama waktu yang dibutuhkan untuk
                        mendapatkan karyawan pengganti?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Kami akan menyediakan karyawan pengganti secepat mungkin. Tidak ada biaya tambahan dalam
                                proses
                                ini dan kami dapat menyediakan karyawan pengganti lebih dari 1 kali.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana dengan penggajian dan benefit kepada karyawan?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Penggajian dan benefit akan dibayarkan oleh Kazokku kepada karyawan sesuai dengan
                                ketentuan yang
                                diatur dalam kontrak.
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana jika karyawan lembur?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Jam lembur karyawan akan dibayar sesuai dengan aturan yang berlaku. Pihak Kazokku dan
                                klien akan
                                melakukan konfirmasi terlebih dahulu, kemudian pihak Kazokku melakukan penagihan biaya
                                lembur
                                yang disepakati kepada klien
                            </p>
                        </figure>
                    </div>
                    <hr>
                    <button class="accordion"><img width=3% src="/assets/img/faq/img@3x.png"
                            alt="img-section-2-mens.png" loading="lazy">
                        Bagaimana jika karyawan bermasalah?
                    </button>
                    <div class="panel" style="margin-top:10px">
                        <figure style="padding:20px" class="rounded-xl linear-gradient-blue border-blue-main">
                            <p style="margin-top:15px">
                                Tim Kazokku akan membantu menyelesaikan permasalahan melalui diskusi dengan karyawan dan
                                klien.
                            </p>
                        </figure>
                    </div>
                    <hr>
                </div><br><br>
            </div>
        </div>
    </section>
</div><br><br><br><br><br><br>
<div class="position-relative d-none d-sm-block d-sm-none d-md-block">
    <div class="position-absolute" style="top: -250px; right: 0">
        <picture>
            <source srcset="/images/home/image-section-2-blue-gradient-radial.webp" type="image/webp">
            <img width="350" height="550" src="/images/home/image-section-2-blue-gradient-radial.svg"
                alt="complementary" />
        </picture>
    </div>
</div>
<?php include '../includes/footer.php' ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N473SL3W8D"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-N473SL3W8D');
</script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>

<script async="" defer="" src="https://www.google.com/recaptcha/api.js"></script>
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
</script>
<?php 
    $add_js = '<script src="/assets/js/contact.js"></script>';
?>

<script>
// *SECTION 1 LEFT
var imageSectionOneCicleOutline = document.getElementById('image-section-1-circle-outline');
anime({
    targets: imageSectionOneCicleOutline,
    translateX: 300,
    loop: 2,
    direction: 'alternate',
    easing: 'easeInOutQuad(0.5, 1)',
});

// *SECTION 1 RIGHT
var imageSectionOneRightSuperman = document.getElementById('img-section-1-right-superman');
anime({
    targets: imageSectionOneRightSuperman,
    translateY: 25,
    loop: true,
    direction: 'alternate',
    easing: 'easeInOutSine',
});

var imgSectionOneRightSeat = document.getElementById('img-section-1-right-seat');
anime({
    targets: imgSectionOneRightSeat,
    translateY: 74,
    loop: true,
    direction: 'alternate',
    easing: 'easeInOutSine',
});

var imgSectionOneRightSmallStartEndMedium = document.getElementById('img-section-1-right-small-start-end-medium');
var imgSectionOneRightSmallStartEnd = document.getElementById('img-section-1-right-small-start-end');
anime({
    targets: [imgSectionOneRightSmallStartEndMedium, imgSectionOneRightSmallStartEnd],
    translateY: 11,
    loop: true,
    direction: 'alternate',
    easing: 'easeInOutSine',
});

var imgSectionOneLamp = document.getElementById('img-section-1-lamp');
var imgSectionOneBook = document.getElementById('img-section-1-book');
anime({
    targets: [imgSectionOneLamp, imgSectionOneBook],
    translateY: 7,
    loop: true,
    direction: 'alternate',
    easing: 'easeInOutSine',
});

var imgSectionOneRightStartLarge = document.getElementById('img-section-1-right-start-large');
anime({
    targets: imgSectionOneRightStartLarge,
    translateY: 5,
    loop: true,
    direction: 'alternate',
    easing: 'easeInOutSine',
});

//*PLAY WITH SCROLL
ScrollReveal().reveal('#img-section-2-mens', {
    delay: 500
});
ScrollReveal().reveal('#img-section-3-main', {
    delay: 500
});
ScrollReveal().reveal('#img-section-4-main', {
    delay: 500
});
</script>