<?php

require "../includes/config.php";


// Check search string
if (isset($_GET['q']) and !empty($_GET['q'])) {
  $q = $_GET['q'];
  require "includes/blog_functions.php";
  // Search for posts
  $posts = searchPosts($conn ,$q);
} else {
  header('Location: http://127.0.0.1/mufaro/blog/');
}

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
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/lib/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/lib/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/css/blog.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $root;?>/css/responsive.css">
    <!-- Favicons -->
    <link href="<?php echo $root;?>/img/icon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo $root;?>/img/icon.png" rel="apple-touch-icon">
  </head>
  
  <body data-spy="scroll" data-target="#mainNav">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="navbar-logo" src="<?php echo $root;?>/img/icon-sm.png" alt="Logo"><span>ufaro</span> Kaseke
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavbar">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link js-scroll-trigger active" href="#hero">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link js-scroll-trigger" href="#about-me">About</a>
            <a class="nav-item nav-link js-scroll-trigger" href="#skills">Skills</a>
            <a class="nav-item nav-link js-scroll-trigger" href="#services">Services</a>
            <a class="nav-item nav-link js-scroll-trigger" href="#projects">Projects</a>
            <a class="nav-item nav-link js-scroll-trigger" href="#reviews">Reviews</a>
            <a class="nav-item nav-link js-scroll-trigger" href="#contact">Contact</a>
          </div>
        </div>
      </div>

    </nav>
    
    <main>
  <!--
    
    Bootstrap Scrollspy having errors
    
    <main data-spy="scroll" data-target="#topNavbar" data-offset="0">
      
    -->
    
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="row flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-between">
          <h2>Blog</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <!-- Breadcrumbs -->

    <section class="blog">
      <div class="container">
          <div class="row justify-content-center justify-content-lg-between">
          <div class="col-12 col-lg-8 blog-entries row">

            <div class="col-12">
              <h5 class="blog-title">Search Results For : <span class="text-capitalize"><?php echo $q;?></span> (<?php echo count($posts);?> results)</h5>
            </div>

            <div class="col-12 col-md-6 entry-container">
              <!-- Blog Entry -->
              <article class="card single-entry panel">
                <div class="card-top">
                  <img src="<?php echo $root;?>/img/overlay-bg.jpg" alt="" class="card-img-top">
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

            <?php

            
            foreach ($posts as $post) {
              ?>
              <div class="col-12 col-md-6 entry-container">
              <!-- Blog Entry -->
                <article class="card single-entry panel">
                  <div class="card-top">
                    <img src="./img/<?php echo $post['post_pic'];?>" alt="" class="card-img-top">
                    <a href="#" class="date"><i class="icon-clock-o mr-2"></i><?php echo formatDate($post['post_date']);?></a>                
                  </div>
                  <div class="card-body">
                    <a href="post.php?id=<?php echo $post['post_id'];?>" class="card-title h5 mb-2 d-block"><?php echo $post['post_title'];?></a>
                    <p class="card-text text-muted">
                      <?php
                        $postContent = str_split($post['post_content'] ,110);
                        $postContent = str_replace(array('<p>' ,'</p>') , "" , $postContent[0]);
                        echo $postContent;
                      ?>
                    </p>

                    <ul class="nav justify-content-between">
                      <li>
                        <a href="" class="d-flex align-items-center">
                          <i class="icon-user"></i><?php echo $post['post_author'];?>
                          </a>
                      </li>
                      <li>
                        <a href="" class="d-flex align-items-center">
                          <i class="icon-comments-o"></i><?php echo $post['post_cmnts'];?> Comments
                          </a>
                      </li>
                    </ul>
                  </div>
                </article>
                <!-- Blog Entry -->
              </div>
      <?php } ?>
            
            

            <div class="col-12 mb-4">
              <nav class="text-center" aria-label="Load More Posts">
                <button class="btn btn-sm mufaro-btn">Load More Posts</button>
              </nav>
            </div> 
          </div>

          

          <div class="col-lg-4 blog-sidebar">
            <div class="panel p-4">
              <div class="search">
                <h5>Search</h5>   
                <form action="" method="">
                  <div class="input-group panel">
                    <input type="search" name="q" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn px-4">
                        <i class="icon-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="categories mt-4">
                <h5>Categories</h5>
                <ul class="nav flex-column">
                  <!--<li>
                    <a href="">
                      Technology<span>(22)</span>
                    </a>
                  </li>-->

                  <?php

                  foreach ($categories as $category) {
                  ?><li>
                    <a href="./category.php?category=<?php echo $category; ?>" class="text-capitalize">
                      <?php echo $category; ?><span>(<?php echo countPostsWithCategory($conn ,$category);?>)</span>
                    </a>
                  </li>
            <?php } ?>
                  
                </ul>
              </div>
              <div class="recent mt-4">
                <h5>Recent Posts</h5>
                <ul class="nav flex-column">
                  <li>
                    <img src="../img/blog/news_1.png" alt="">
                    <div class="recent-info ml-2">
                      <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                      <time datetime="" class="text-muted">18 Sept 2020</time>
                    </div>
                  </li>

                  <?php
                  $recentPosts = getLatestPosts($conn ,4);

                  foreach ($recentPosts as $data) {
                  ?><li>
                      <img src="../img/blog/news_1.png" alt="">
                      <div class="recent-info ml-2">
                        <a href="#"><?php echo $data['post_title'];?></a>
                        <time datetime="" class="text-muted"><?php echo formatDate($data['post_date']);?></time>
                      </div>
                    </li>
            <?php } ?>
                </ul>
              </div>
              <div class="newsletter mt-4">
                <h5>Newsletter</h5>
                <form action="subscribe.php" method="get">
                  <!-- Additional Info -->
                  <input type="hidden" name="action" value="subscribe">
                  <input type="email" name="email" id="" placeholder="Enter your Email" class="form-control">
                  <button type="submit" class="btn btn-sm btn-block mufaro-btn">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



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

    </main>

    
    <a href="" class="btn scroll-top">
      <span class=""></span>
    </a>  



    <script src="<?php echo $root;?>/lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?php echo $root;?>/lib/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo $root;?>/lib/jquery.form.min.js"></script>
    <script src="<?php echo $root;?>/lib/jquery-easing/jquery.easing.min.js"></script>
<!-- Bootstrap JS CDN
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script> -->
  <script src="<?php echo $root;?>/lib/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $root;?>/lib/wow.min.js"></script>
  <script src="<?php echo $root;?>/js/forms.js"></script>
  <script src="<?php echo $root;?>/js/main.js"></script>

</body>
</html>