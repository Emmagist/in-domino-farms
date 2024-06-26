<?php

    require "include/head.php";
    require "include/nav.php";

?>
     <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png); height: 7px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact Us</h1>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us 
    ============================================= -->
    <div class="contact-area default-padding" style="background-image: url(assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center">
                
                <div class="col-tact-stye-one col-lg-7 mb-md-50">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a Massage</h2>
                        <form action="" method="POST" class="contact-form">
                            <div class="form-group">
                                <li class="alert alert-success list-unstyled productSuccess text-center" style="display:none;"></li>
                                <li class="alert alert-danger list-unstyled productError text-center" style="display:none;"></li>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h2>
                            Contact 
                            <span>
                                Information
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M14.4,111.6c0,0,202.9-33.7,471.2,0c0,0-194-8.9-397.3,24.7c0,0,141.9-5.9,309.2,0" style="animation-play-state: running;"></path></svg>
                            </span>
                        </h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Call or WhatsApp</h5>
                                    <a href=""> +234 
(0)816 350 2891</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                    Idanre Village, Kilometer 46, Sagamu-Benin Express Way, Ijebu Imusin, Ogun State.
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="info@indominofarms.com">info@indominofarms.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container" style="margin-top:80px">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-12 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <h5>
                        For enquiries about distribution, please email: nola@indominofarms.com
                        </h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer 
    ============================================= -->
<?php require "include/footer.php"; ?>

<script>
//Contact us
$('.contact-form').submit(function (e) {
  e.preventDefault();
  const formData = new FormData(this);

  $.ajax({
      url: 'libs/fetchAjax.php?pg=205',
      method: 'POST',
      dataType: 'json',
      data: formData,
      contentType: false,
      processData: false,
      // cache: false,
      success: (param) => { 
          if (param.success) {
              
              $('.productSuccess').fadeIn()
              $('.productSuccess').text(param.success);
              setInterval(() => {
                  $('.productSuccess').fadeOut();
                  location.reload();
              }, 6000);
          }else if(param.error){
              $('.productError').fadeIn()
              $('.productError').text(param.error);
              setInterval(() => {
                  $('.productError').fadeOut();
              }, 6000);
          }
      },
  });
  return false;
});
</script>