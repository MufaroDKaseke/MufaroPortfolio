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
      <form action="../subscribe.php" method="get">
        <!-- Additional Info -->
        <input type="hidden" name="action" value="subscribe">
        <input type="email" name="email" id="" placeholder="Enter your Email" class="form-control">
        <button type="submit" class="btn btn-sm btn-block mufaro-btn">Subscribe</button>
      </form>
    </div>
  </div>
</div>