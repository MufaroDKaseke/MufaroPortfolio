<?php

/* Footer Section */

require 'includes/config.php';
require 'blog/includes/blog_functions.php';

?>



<!-- Footer-->
<footer class="footer pt-4 pb-2 px-2">
  <div class="container">
    <div class="row justify-content-around py-3">
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 class="mb-3">Links</h4>
        <ul class="nav flex-column footer-links">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $root ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $root . '/about' ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $root . '/services' ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $root . '/projects' ?>">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $root . '/blog' ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $root . '/contact' ?>">Contact</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 mb-4 mb-md-0">
        <h4 class="mb-4">Blog</h4>
        <ul class="nav footer-blog">
          <!--<li>
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
          </li>-->

          <?php


          $latestPosts = getLatestPosts($conn ,2);
          foreach ($latestPosts as $post) {
            ?>
            <li>
              <div class="thumb">
                <a href="blog/post.php?post=<?php echo $post['post_id'];?>">
                  <img src="<?php echo $root;?>/img/blog/news_2.png" alt="">
                </a>
              </div>
              <div class="info">
                <a href="#">
                  <h4><?php echo $post['post_title'];?></h4>
                </a>
                <span><?php echo formatDate($post['post_date']);?></span>
              </div>
            </li>
          <?php } ?>
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
          <img src="<?php echo $root;?>/img/icon-sm.png" alt="Logo"><span>ufaro</span> Kaseke
        </a>
      </div>
      <div class="col-lg-4 order-2 order-md-1">
        <p class="mb-0 small text-center">&copy; <script>document.write(new Date().getFullYear());</script> Mufaro Kaseke</p>
      </div>
      <div class="col-lg-4 order-1 order-md-2">
        <ul class="nav footer-social justify-content-center justify-content-md-end">
          <li class="nav-item">
            <a href="<?php echo $social_link['facebook'];?>" class="nav-link">
              <i class="icon-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $social_link['twitter'];?>" class="nav-link">
              <i class="icon-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $social_link['instagram'];?>" class="nav-link">
              <i class="icon-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $social_link['github'];?>" class="nav-link">
              <i class="icon-github"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $social_link['linkedin'];?>" class="nav-link">
              <i class="icon-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</footer>
<!-- End Of Footer-->