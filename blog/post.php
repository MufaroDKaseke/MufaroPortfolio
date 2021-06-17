<?php

require "includes/blog_functions.php";

if (isset($_GET['id'])) {
  $post_id = $_GET['id'];

  $post = getSinglePost($conn ,$post_id);
} else {
  # code...
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
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../lib/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/blog.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <!-- Favicons -->
    <link href="../img/icon.png" rel="shortcut icon" type="image/png">
    <link href="../img/icon.png" rel="apple-touch-icon">
  </head>
  
  <body id="blog-full-page" data-spy="scroll" data-target="#mainNav">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="navbar-logo" src="../img/icon-sm.png" alt="Logo"><span>ufaro</span> Kaseke
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
    <section class="breadcrumbs" style="background-image: url('./img/<?php echo $post['post_pic'];?>');">
      <div class="container">
        <div class="row flex-column justify-content-center">
          <nav aria-label="breadcrumb">
            <h2><?php echo $post['post_title'];?></h2>
            <a href="#" class="author"><i>by </i><?php echo $post['post_author'];?></a>
            <span class="date"><i class="icon-clock-o mr-2"></i><?php echo formatDate($post['post_date']);?></span> 
          </nav>
        </div>
      </div>
    </section>
    <!-- Breadcrumbs -->

    <section class="blog">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7 blog-entries">
            <!-- Blog Entry -->
            <article id="<?php echo $post['post_id'];?>" class="card single-entry panel post">
              <div class="card-body pt-0">
                <div class="post-info">
                  <a href="" class="comments"><i class="icon-comments-o"></i><?php echo $post['post_cmnts'];?> comments</a>
                </div>
                <div class="post-body">
                  <!-- Post Body starts here -->
                  <?php

                    echo $post['post_content'];

                  ?>
                  <!-- Post Body ends here -->
                </div>

                <hr class="my-4">

                <ul class="nav justify-content-between">
                  <li>

                    <a href="" like-action="<?php

                    // Display Likes

                    if(postIsLiked($post_id)) {
                      echo "unlike";
                    } else {
                      echo "like";
                    }

                    ?>" class="post-likes <?php if(postIsLiked($post_id)) echo "liked";?> d-flex align-items-center">
                      <i class="<?php 

                      if(postIsLiked($post_id)) {
                        echo "icon-heart";
                      } else {
                        echo "icon-heart-o";
                      }


                      ?> mr-3"></i><?php

                      if(postIsLiked($post_id)) {
                        echo($post['post_likes'] - 1);
                      } else {
                        echo $post['post_likes'];
                      }?> likes<span> and you.</span>
                    </a>
                  </li>
                  <li class="float-right">
                    <a href="">Technology
                    </a>
                  </li>
                </ul>
                
              </div>
            </article>
            <!-- Blog Entry -->

            <?php

            $author = getAuthor($conn ,$post['post_author']);

            ?>
            <div class="post-author d-flex panel">
              <img src="<?php echo $author['author_pic'];?>" alt="">
              <div class="author-info">
                <a href="#" class="author-name"><?php echo $author['author_name'];?></a>
                <ul class="nav author-social">
                  <li>
                    <a href="<?php echo $author['author_fb'];?>"><i class="icon-facebook"></i></a>
                  </li>
                  <li>
                    <a href="<?php echo $author['author_twitter'];?>"><i class="icon-twitter"></i></a>
                  </li>
                  <li>
                    <a href="<?php echo $author['author_instagram'];?>"><i class="icon-instagram"></i></a>
                  </li>
                </ul>
                <p class="text-muted author-bio mb-0"><?php echo $author['author_bio'];?></p>
              </div>
            </div>

            <div class="post-comments">
              <div>
                <h5><?php echo $post['post_cmnts'];?> Comments</h5>
              </div>
              <ul class="nav flex-column">
                <li class="single-comment d-flex">
                  <img src="../img/mufaro-2.jpg" alt="">
                  <div class="comment-info">
                    <p class="comment-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis quam voluptatibus, alias quas ipsa non magni reprehenderit corporis explicabo, excepturi neque labore eligendi, quo repellat? Laudantium dignissimos tenetur similique labore laborum molestiae ullam, sapiente ut at impedit necessitatibus, illum excepturi.</p>
                    <div class="d-flex justify-content-between">
                      <span class="comment-author">Mufaro D Kaseke</span>
                      <span class="comment-date">
                        <i class="icon-clock-o"></i>
                      18 Dec 2020 at 3:12 pm</span>
                    </div>
                  </div>
                </li>
                <?php

                  // Display Comments

                  $comments = getComments($conn ,$post_id);

                  if (empty($comments) !== true && $post['post_cmnts'] !== 0) {
                    foreach ($comments as $comment) {
                    ?><li class="single-comment d-flex">
                        <img src="../img/mufaro-2.jpg" alt="">
                        <div class="comment-info">
                          <p class="comment-content"><?php echo $comment['cmnt_content'];?></p>
                          <div class="d-flex justify-content-between">
                            <span class="comment-author"><?php echo $comment['cmnt_author'];?></span>
                          <span class="comment-date">
                            <i class="icon-clock-o"></i>
                            <?php echo formatDate($comment['cmnt_date']) . ' at ' . formatTime($comment['cmnt_date']);?></span>
                          </div>
                        </div>
                      </li>
              <?php }
                  } else {
                    ?><p class="text-center text-muted py-2">No Comments Yet</p>
           <?php  } ?>
                  
                  
              </ul>
              <div class="text-center mt-5">
                <button type="button" class="btn btn-sm mufaro-btn" data-toggle="modal" data-target="#commentModal">Leave Comment</button>
              </div>
            </div>


          </div>

          <div class="col-lg-4 blog-sidebar">
            <div class="panel p-4">
              <div class="search">
                <h5>Search</h5>   
                <form action="search.php" method="get">
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
                  <li>
                    <a href="">
                      Technology<span>(22)</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Technology<span>(22)</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Technology<span>(22)</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Technology<span>(22)</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Technology<span>(22)</span>
                    </a>
                  </li>
                  
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
                  <li>
                    <img src="../img/blog/news_1.png" alt="">
                    <div class="recent-info ml-2">
                      <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                      <time datetime="" class="text-muted">18 Sept 2020</time>
                    </div>
                  </li>
                  <li>
                    <img src="../img/blog/news_1.png" alt="">
                    <div class="recent-info ml-2">
                      <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                      <time datetime="" class="text-muted">18 Sept 2020</time>
                    </div>
                  </li>
                  <li>
                    <img src="../img/blog/news_1.png" alt="">
                    <div class="recent-info ml-2">
                      <a href="#">Lorem ipsum dolor sit amet consectetur.</a>
                      <time datetime="" class="text-muted">18 Sept 2020</time>
                    </div>
                  </li>
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
    <footer class="footer pt-4 pb-2">
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



    <!-- Leave Comments Modal -->
    <div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="commentModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title font-weight-bold" id="commentModaltTitle">Leave Comment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="icon-close2"></span>
            </button>
          </div>
          <div class="modal-body py-4">
            <form id="commentForm" novalidate="novalidate">
              <!-- Extra Details -->
              <input type="hidden" name="post-id" value="<?php echo $post_id; ?>">
              <!-- End of Extra Details -->
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
                    <textarea class="form-control" id="comment" name="comment" rows="8" cols="" width="100%" placeholder="Your Comment*" required></textarea>
                  </div>
                </div>
                <div class="col text-center">
                  <button type="submit" class="btn btn-sm mufaro-btn my-2">Submit Comment</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Leave Comments Modal-->

    



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
  <script src="../js/blog.js"></script>

</body>
</html>