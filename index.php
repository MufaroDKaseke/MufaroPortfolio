<?php

require 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <title>Mufaro Kaseke | Portfolio</title>
  <!-- Bootstrap CSS CDN
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="lib/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="lib/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- Favicons -->
    <link href="img/icon.png" rel="shortcut icon" type="image/png">
    <link href="img/icon.png" rel="apple-touch-icon">
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
            <a class="nav-item nav-link active" href="#hero">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $root;?>/about/">About</a>
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
    
    <!-- Hero Section -->
    <section id="hero" class="hero wow fadeIn" data-wow-delay="1s" data-wow-duration="1.5s">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 text-center text-lg-left text-white">
            <!--<img src="img/mufaro-3.jpg" class="picture mb-3">-->
            <h1>I am <span>Mufaro</span> Kaseke</h1>
            <h2 class="my-3">I'm a <span class="typed-words"></span></h2>
            <div class="social my-2">
              <a href="<?php echo $social_link['facebook'];?>" class="icon-facebook ml-0"></a>           
              <a href="<?php echo $social_link['twitter'];?>" class="icon-twitter"></a>            
              <a href="<?php echo $social_link['instagram'];?>" class="icon-instagram"></a>           
              <a href="<?php echo $social_link['github'];?>" class="icon-github"></a>           
              <a href="<?php echo $social_link['linkedin'];?>" class="icon-linkedin"></a>            
            </div>
            <button class="btn mufaro-btn my-1" data-toggle="modal" data-target="#hireMe">Hire Me</button>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Hero Section -->
    
    
    <!--About Section -->
    <section id="about-me" class="about-me">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 section-heading">
            <h2>About Me</h2>
          </div>
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
                  <img src="img/mufaro-2.jpg" style="border-radius: 50%;">
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
    
    
    <!-- Services Section -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-12 section-heading">
            <h2>Services</h2>
          </div>
          
          <div class="col-md-4">
            <div class="single-service text-center">
              <span class="icon-web"></span>
              <h3>Web Design</h3>
              <p>I make beautiful standard designs that can attract more people to your website.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-service text-center">
              <span class="icon-store_mall_directory"></span>
              <h3>E-commerce</h3>
              <p>I make mordern online stores for any kind of products and enable selling with ease.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-service text-center">
              <span class="icon-developer_mode"></span>
              <h3>Web Development</h3>
              <p>I build websites with quality functionality to carry out your needs of any complexity.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Services Section -->
    
    
    <!-- Callout Section -->
    <section id="callout" class="callout py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <h2>Hire Me For Your Awesome Project</h2>
              <p>I am Available for freelance work so if you need any of your projects to be done you can contact me.</p>
              <button href="#" class="btn mufaro-btn" data-toggle="modal" data-target="#hireMe">Hire Me</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Callout Section -->
    
    
    <!-- Projects Section -->
    <section id="projects" class="projects">
      <div class="container">
        <div class="row">
          <div class="col-12 section-heading">
            <h2>Projects</h2>
          </div>
          
          <div class="col-md-4 pb-md-5">
            <div class="card panel">
              <a href="#">
                <img src="img/projects/hortico-basket.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">HBI Website</h5>
                <p>
                  <strong class="project-type">Website</strong>
                  <span class="mx-2">/</span>
                  18 Sept. 2020
                </p>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 pb-md-5">
            <div class="card panel">
              <a href="#">
                <img src="img/projects/hortico-basket.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">HBI Website</h5>
                <p>
                  <strong class="project-type">Website</strong>
                  <span class="mx-2">/</span>
                  18 Sept. 2020
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 pb-md-5">
            <div class="card panel">
              <a href="#">
                <img src="img/projects/hortico-basket.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">HBI Website</h5>
                <p>
                  <strong class="project-type">Website</strong>
                  <span class="mx-2">/</span>
                  18 Sept. 2020
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 pb-md-5">
            <div class="card panel">
              <a href="#">
                <img src="img/projects/hortico-basket.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">HBI Website</h5>
                <p>
                  <strong class="project-type">Website</strong>
                  <span class="mx-2">/</span>
                  18 Sept. 2020
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 pb-md-5">
            <div class="card panel">
              <a href="#">
                <img src="img/projects/hortico-basket.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">HBI Website</h5>
                <p>
                  <strong class="project-type">Website</strong>
                  <span class="mx-2">/</span>
                  18 Sept. 2020
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 pb-md-5">
            <div class="card panel">
              <a href="#">
                <img src="img/projects/hortico-basket.png" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">HBI Website</h5>
                <p>
                  <strong class="project-type">Website</strong>
                  <span class="mx-2">/</span>
                  18 Sept. 2020
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Of Projects Section -->
    
    <!-- Reviews Section -->
    <section id="reviews" class="reviews">
      <div class="container">
        <div class="row">
          <div class="col-12 section-heading">
            <h2>Reviews</h2>
          </div>
          
          <div class="col-md-12">
            <div id="review-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#review-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#review-carousel" data-slide-to="1"></li>
                <li data-target="#review-carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="single-review">
                    <img src="img/mufaro.jpg">
                    <h3>Mufaro Kaseke</h3>
                    <div class="d-flex justify-content-center w-100">
                      <div class="panel p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores eos repudiandae quibusdam doloribus cumque, voluptas quam beatae dignissimos delectus aut id culpa quia placeat, ex voluptatem nihil consequatur eius ratione.</p>
                      </div>                  
                    </div>
                  </div>
                </div>
                
                <div class="carousel-item">
                  <div class="single-review">
                    <img src="img/mufaro.jpg">
                    <h3>Mufaro Kaseke</h3>
                    <div class="d-flex justify-content-center w-100">
                      <div class="panel p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ratione dignissimos veniam doloribus necessitatibus laborum repellendus sapiente corrupti expedita nobis distinctio atque vitae eius, explicabo. Optio, provident sed inventore repellat eveniet?</p>
                      </div>                  
                    </div>
                  </div>
                </div>
                
                <div class="carousel-item">
                  <div class="single-review">
                    <img src="img/mufaro.jpg">
                    <h3>Mufaro Kaseke</h3>
                    <div class="d-flex justify-content-center w-100">
                      <div class="panel p-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Iure est quod omnis quidem ullam suscipit delectus, perspiciatis quas tenetur expedita, pariatur eligendi voluptates sint ea nostrum dolorem maxime ipsum eveniet?</p>
                      </div>                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Reviews Section -->

    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-12 section-heading">
            <h2>Blog</h2>
          </div>

          <div class="col-md-4">
            <!-- Blog Entry -->
            <article class="card single-entry panel">
              <div class="card-top">
                <img src="img/overlay-bg.jpg" alt="" class="card-img-top">
                <a href="#" class="date"><i class="icon-clock-o mr-2"></i>18 Sept 2020</a>                
              </div>
              <div class="card-body">
                <a href="#" class="card-title h5 mb-2 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing.</a>

                <p class="card-text text-muted">
                  Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Excepturi deserunt esse temporibus atque sequi vitae...
                </p>

                <ul class="nav justify-content-between">
                  <li>
                    <a href="" class="d-flex align-items-center">
                      <i class="icon-user"></i>Mufaro D Kaseke 
                    </a>
                  </li>
                  <li>
                    <a href="" class="d-flex align-items-center">
                      <i class="icon-comments-o"></i>10 Comments
                    </a>
                  </li>
                </ul>
              </div>
            </article>
            <!-- Blog Entry -->
          </div>

          <div class="col-md-4">
            <!-- Blog Entry -->
            <article class="card single-entry panel">
              <div class="card-top">
                <img src="img/overlay-bg.jpg" alt="" class="card-img-top">
                <a href="#" class="date"><i class="icon-clock-o mr-2"></i>18 Sept 2020</a>                
              </div>
              <div class="card-body">
                <a href="#" class="card-title h5 mb-2 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing.</a>

                <p class="card-text text-muted">
                  Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Excepturi deserunt esse temporibus atque sequi vitae...
                </p>

                <ul class="nav justify-content-between">
                  <li>
                    <a href="" class="d-flex align-items-center">
                      <i class="icon-user"></i>Mufaro D Kaseke 
                    </a>
                  </li>
                  <li>
                    <a href="" class="d-flex align-items-center">
                      <i class="icon-comments-o"></i>10 Comments
                    </a>
                  </li>
                </ul>
              </div>
            </article>
            <!-- Blog Entry -->
          </div>

          <div class="col-md-4">
            <!-- Blog Entry -->
            <article class="card single-entry panel">
              <div class="card-top">
                <img src="img/overlay-bg.jpg" alt="" class="card-img-top">
                <a href="#" class="date"><i class="icon-clock-o mr-2"></i>18 Sept 2020</a>                
              </div>
              <div class="card-body">
                <a href="#" class="card-title h5 mb-2 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing.</a>

                <p class="card-text text-muted">
                  Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Excepturi deserunt esse temporibus atque sequi vitae...
                </p>

                <ul class="nav justify-content-between">
                  <li>
                    <a href="" class="d-flex align-items-center">
                      <i class="icon-user"></i>Mufaro D Kaseke 
                    </a>
                  </li>
                  <li>
                    <a href="" class="d-flex align-items-center">
                      <i class="icon-comments-o"></i>10 Comments
                    </a>
                  </li>
                </ul>
              </div>
            </article>
            <!-- Blog Entry -->
          </div>

        </div>
      </div>
    </section>
    
    
    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-12 section-heading">
            <h2>Get In Touch</h2>
          </div>
          
          <div class="col-md-6">
            <div class="contact-me panel">
              <div class="d-flex align-items-center">
                <img src="img/mufaro.jpg">
                <div class="pl-3">
                  <h4>Mufaro Kaseke</h4>
                  <p class="my-1">@mufarokaseke</p>
                </div>
              </div>
              <p>Passionate and hardworking student looking for an opportunity to showcase my work through providing standard and quality services utilizing the knowledge I have acquired in the field.</p>
              <div class="text-right"><a href="#" class="btn mufaro-btn">Follow</a></div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="contact-form">
              <form id="contactForm">
                <input type="hidden" name="form" value="contactForm">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input id="name" type="text" name="name" class="form-control" placeholder="Name*">  
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-group">
                      <input id="email" type="email" name="email" class="form-control" placeholder="Email*">  
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-group">
                      <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject*"> 
                    </div>
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" id="message" name="message" rows="5" cols="" width="100%" placeholder="Message*"></textarea>
                  </div>
                  <div class="col text-center">
                    <button type="submit" name="submit" class="btn mufaro-btn my-3">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Of Contact Section -->
    
    <!-- Footer-->
    <footer class="footer pt-4 pb-2 px-2">
      <div class="container">
        <div class="row justify-content-around py-3">
          <div class="col-md-3">
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
          <div class="col-md-3">
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
          <div class="col-md-3">
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

        <div class="row justify-content-between py-2">
          <div class="col-lg-4 text-center text-md-left">
            <a href="#" class="footer-brand d-inline">
              <img src="../img/icon-sm.png" alt="Logo"><span>ufaro</span> Kaseke
            </a>
          </div>
          <div class="col-lg-4 order-2 order-md-1">
            <p class="mb-0 text-center">&copy; <script>document.write(new Date().getFullYear());</script> Mufaro Kaseke</p>
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

    <!-- Forn Result Modal Trial Version -->
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



    <script src="lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="lib/jquery-validation/jquery.validate.min.js"></script>
    <script src="lib/jquery.form.min.js"></script>
    <script src="lib/jquery-easing/jquery.easing.min.js"></script>
<!-- Bootstrap JS CDN
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
  <script src="lib/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="lib/wow.min.js"></script>
  <script src="lib/typed.js"></script>
  <script src="js/forms.js"></script>
  <script src="js/main.js"></script>
  
  
  <script>
  // Typed Words Plugin
  var typed = new Typed('.typed-words', {
    strings: ["Web Developer","Web Designer","Programmer","Professional"],
    typeSpeed: 50,
    backSpeed: 50,
    backDelay: 3000,
    startDelay: 1000,
    loop: true,
  });
</script>

</body>
</html>