<?php

require '../includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <title>Mufaro Kaseke | About</title>
  <!-- Bootstrap CSS CDN
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../lib/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <!-- Favicons -->
    <link href="../img/icon.png" rel="shortcut icon" type="image/png">
    <link href="../img/icon.png" rel="apple-touch-icon">
  </head>
  
  <body data-spy="scroll" data-target="#mainNav">

    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $root;?>">
          <img class="navbar-logo" src="<?php echo $root;?>/img/icon-sm.png" alt="Logo"><span>ufaro</span> Kaseke
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavbar">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="<?php echo $root;?>">Home</a>
            <a class="nav-item nav-link active" href="<?php echo $root;?>/about/">About <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $root;?>/services/">Services</a>
            <a class="nav-item nav-link" href="<?php echo $root;?>/projects/">Projects</a>
            <a class="nav-item nav-link" href="<?php echo $root;?>/blog/">Blog</a>
            <a class="nav-item nav-link" href="<?php echo $root;?>/contact/">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Of Header Section -->
    
    <main>
  <!--
    
    Bootstrap Scrollspy having errors
    
    <main data-spy="scroll" data-target="#topNavbar" data-offset="0">
      
    -->
    
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <h2>About</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <!-- Breadcrumbs -->

    <!--About Section -->
    <section id="about-me" class="about-me">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-4 wow fadeInUp" data-wow-delay="1s" data-wow-duration="2s">
            <div id="profile" class="card panel">
              <div class="w-100 d-flex justify-content-around align-items-end pt-3 px-3">
                <div class="text-center">
                  <a href="tel:+263780948498">
                    <h4 class="icon-phone2"></h4>
                    <h6>Call</h6> 
                  </a>  
                </div>
                <div class="img-container">
                  <img src="../img/mufaro-2.jpg" style="border-radius: 50%;">
                </div>
                <div class="text-center">
                  <a href="https://wa.me/+263780948498/?text=Hello ,I'm interested in your services.">
                    <h4 class="icon-whatsapp"></h4>
                    <h6>Message</h6>  
                  </a>
                </div>
              </div>
              <div class="card-body text-center">
                <h5>Mufaro Kaseke</h5>
                <p>Web Developer</p>
                <button class="btn btn-sm mufaro-btn" data-toggle="modal" data-target="#requestCall">Request Call</button>
              </div>
              <div class="card-footer">
                <div class="w-100 d-flex justify-content-around">
                  <a href="https://www.facebook.com/mufaro.kaseke.568/" class="icon-facebook ml-0"></a>           
                  <a href="https://twitter.com/KasekeMufaro" class="icon-twitter"></a>            
                  <a href="https://www.instagram.com/mufaro.dev/" class="icon-instagram"></a>           
                  <a href="https://github.com/MufaroDKaseke" class="icon-github"></a>           
                  <a href="#" class="icon-linkedin"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 wow fadeInUp" data-wow-delay="1s" data-wow-duration="2s">
            <div id="about" class="card panel">
              <div class="card-body">
                <h2>I'm a Web Developer</h2>
                <h4>Based in <span>Harare ,Zimbabwe</span></h4>
                <p>I design and develop all kinds of mordern and stylish websites for any kind of business or organisation. My passion is in building top of the class web services for you to interact with your clients in the most flexible way.</p>
                <ul class="more-details pl-0" style="list-style: none;"> 
                  <li>Age | 16yrs</li>
                  <li>Phone | (+263) 78 094 8498</li>
                  <li>Residence | Zimbabwe</li>
                  <li>Email | <a href="mailto:mufarodarlington@gmail.com">mufarodarlington@gmail.com</a></li>
                  <li>Freelance | Available</li>
                  <li>Address | 13F Fraser St, Parktown</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of About Section-->

    <!-- Skills Section-->
    <section id="skills" class="skills">
      <div class="container">
        <div class="row">
          <div class="col-12 section-heading">
            <h2>Skills</h2>
          </div>
          <div class="col-lg-6">
            <div class="panel">
              <div class="single-skill">
                <h6>HTML/CSS</h6> <strong class="badge badge-warning badge-pill">100%</strong>
                <div class="rounded progress">
                  <div class=" progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              
              <div class="single-skill">
                <h6>JAVASCRIPT</h6> <strong class="badge badge-danger badge-pill">90%</strong>
                <div class="rounded progress">
                  <div class=" progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              
              <div class="single-skill">
                <h6>PHP</h6> <strong class="badge badge-info badge-pill">90%</strong>
                <div class="rounded progress">
                  <div class=" progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="panel">
              <div class="single-skill">
                <h6>WEB DESIGN</h6> <strong class="badge badge-warning badge-pill">85%</strong>
                <div class="rounded progress">
                  <div class=" progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              
              <div class="single-skill">
                <h6>WEB DEVELOPEMENT</h6> <strong class="badge badge-danger badge-pill">80%</strong>
                <div class="rounded progress">
                  <div class=" progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              
              <div class="single-skill">
                <h6>PROGRAMMING</h6> <strong class="badge badge-info badge-pill">75%</strong>
                <div class="rounded progress">
                  <div class=" progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Skills Section-->



    <!-- Footer-->
    <footer class="footer pt-4 pb-2 px-2">
      <div class="container">
        <div class="row justify-content-around py-3">
          <div class="col-md-3 mb-4 mb-md-0">
            <h4 class="mb-3">Links</h4>
            <ul class="nav flex-column footer-links">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-4 mb-md-0">
            <h4 class="mb-4">Blog</h4>
            <ul class="nav footer-blog">
              <li>
                <div class="thumb">
                  <a href="#">
                    <img src="../img/blog/news_1.png" alt="">
                  </a>
                </div>
                <div class="info">
                  <a href="#">
                    <h4>School for African 
                    Childrens</h4>
                  </a>
                  <span>Jun 12, 2019</span>
                </div>
              </li>
              <li>
                <div class="thumb">
                  <a href="#">
                    <img src="../img/blog/news_2.png" alt="">
                  </a>
                </div>
                <div class="info">
                  <a href="#">
                    <h4>School for African 
                    Childrens</h4>
                  </a>
                  <span>Jun 12, 2019</span>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-4 mb-md-0">
            <h4 class="mb-3">Contact</h4>
            <ul class="nav flex-column footer-contact">
              <li class="nav-item">
                <a href="" class="nav-link">mufarodkaseke@gmail.com</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">+263 780 948 498</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"></a>
              </li>
            </ul>
          </div>
        </div>

        <div class="row align-items-center justify-content-between py-2">
          <div class="col-lg-4 text-center text-md-left">
            <a href="#" class="footer-brand d-inline">
              <img src="../img/icon-sm.png" alt="Logo"><span>ufaro</span> Kaseke
            </a>
          </div>
          <div class="col-lg-4 order-2 order-md-1">
            <p class="mb-0 small text-center">&copy; <script>document.write(new Date().getFullYear());</script> Mufaro Kaseke</p>
          </div>
          <div class="col-lg-4 order-1 order-md-2">
            <ul class="nav footer-social justify-content-center justify-content-md-end">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="icon-facebook"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="icon-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="icon-instagram"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="icon-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="icon-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </footer>
    <!-- End Of Footer-->


    <!-- Request Call Modal -->
    <div class="modal fade" id="requestCall" tabindex="-1" role="dialog" aria-labelledby="requestCallTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title font-weight-bold" id="requestCallTitle">Request Call</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="icon-close2"></span>
            </button>
          </div>
          <div class="modal-body py-4">
            <form id="requestCallForm" novalidate="novalidate">
              <input type="hidden" name="form" value="requestCallForm">
              <div class="row">
                <div class="col-12">
                  <div class="input-group">
                    <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-group">
                    <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number*" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-group">
                    <textarea class="form-control" id="message" name="message" rows="5" cols="" width="100%" placeholder="Reason*" required></textarea>
                  </div>
                </div>
                <div class="col text-center">
                  <button type="submit" class="btn mufaro-btn my-2">Send Request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--End Of Request Call Modal-->



    <!-- Hire Me Modal -->
    <div class="modal fade" id="hireMe" tabindex="-1" role="dialog" aria-labelledby="hireMeTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title font-weight-bold" id="hireMeTitle">Request Qoutation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="icon-close2"></span>
            </button>
          </div>
          <div class="modal-body py-4">
            <form id="hireMeForm" novalidate="novalidate">
              <input type="hidden" name="form" value="hireMeForm">
              <div class="row">
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="text" name="name" class="form-control" placeholder="Full Name*" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="Email*" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-group">
                    <input type="tel" name="phoneNumber" class="form-control" placeholder="Phone Number*" required>
                  </div>
                </div>
                <div class="col-12">
                  <div class="input-group">
                    <textarea class="form-control" id="message" name="message" rows="5" cols="" width="100%" placeholder="How can I help you?*" required></textarea>
                  </div>
                </div>
                <div class="col text-center">
                  <button type="submit" class="btn mufaro-btn my-2">Send Request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Of Hire Me Modal-->

    <!-- Hire Me Modal Success Trial Version -->
    <div class="modal fade" id="formResult" tabindex="-1" role="dialog" aria-labelledby="formResultTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title font-weight-bold" id="formResultTitle">Send Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="icon-close2"></span>
            </button>
          </div>
          <div class="modal-body py-4">
            <!-- Result from backend goes here after ajax success --> 
          </div>
        </div>
      </div>
    </div>
    <!-- End Of Hire Me Modal-->

    <!-- Hire Me Modal Success Trial Version 
      <div class="modal fade" id="formResult" tabindex="-1" role="dialog" aria-labelledby="formResultTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title font-weight-bold" id="formResultTitle">Success</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="icon-close2"></span>
              </button>
            </div>
            <div class="modal-body py-4">
              <div class="text-center">
                <i class="icon-check-circle-o text-success" style="font-size: 3rem;"></i>
              </div>
              <div class="success-msg">
                <h5 class="text-center my-3">Your message was successfully send...</h5>
                <div class="col text-center">
                  <button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      End Of Hire Me Modal-->
      
    <!--  Hire Me Modal Error Trial Version 
      <div class="modal fade" id="hireMe" tabindex="-1" role="dialog" aria-labelledby="hireMeTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title font-weight-bold" id="hireMeTitle">Request Qoutation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="icon-close2"></span>
              </button>
            </div>
            <div class="modal-body py-4">
              <div class="text-center">
                <i class="icon-error_outline text-danger" style="font-size: 3rem;"></i>
              </div>
              <div class="success-msg">
                <h5 class="text-center my-3">Oops ,an error occured.</h5>
                <div class="col text-center">
                  <button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      End Of Hire Me Modal-->



    </main>

    
    <a href="" class="btn scroll-top">
      <span class=""></span>
    </a>  



    <script src="../lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="../lib/jquery-validation/jquery.validate.min.js"></script>
    <script src="../lib/jquery.form.min.js"></script>
    <script src="../lib/jquery-easing/jquery.easing.min.js"></script>
<!-- Bootstrap JS CDN
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
  <script src="../lib/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow.min.js"></script>
  <script src="../js/forms.js"></script>
  <script src="../js/main.js"></script>

</body>
</html>