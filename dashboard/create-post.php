<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mufaro Kaseke | Dashboard - Blog</title>
  <link rel="stylesheet" href="../lib/animate/animate.css">
  <link rel="stylesheet" href="../lib/icomoon/icomoon.css">
  <link rel="stylesheet" href="../lib/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../lib/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/messages.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Favicons -->
  <link href="../img/icon.png" rel="icon">
  <link href="../img/icon.png" rel="apple-touch-icon">
</head>
<body id="index">

  <!-- Sidebar -->
  <aside class="sidebar">
    <a href="../" class="sidebar-brand d-flex align-items-center justify-content-center">
      <img src="../img/icon.png" alt="..." class="logo">
      <h5 class="mb-0 px-2 font-weight-light"><span>Mufaro</span> Portfolio</h5>
    </a>
    <div class="sidebar-nav pt-3">
      <ul class="nav">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="icon-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item menu">
          <a href="#"class="nav-link">
            <i class="icon-envelope-square"></i>
            <span>Messages</span>
            <i class="icon-angle-down"></i>
          </a>
          <ul class="nav menu-container">
            <li class="nav-item active">
              <a href="#" class="nav-link">Inbox</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Outbox</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">All</a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu">
          <a href="#"class="nav-link">
            <i class="icon-inbox"></i>
            <span>Quotations</span>
            <i class="icon-angle-down"></i>
          </a>
          <ul class="nav menu-container">
            <li class="nav-item">
              <a href="#" class="nav-link">All</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">New</a>
            </li>
          </ul>
        </li>
        <li class="nav-item menu">
          <a href="#"class="nav-link">
            <i class="icon-phone_iphone"></i>
            <span>Calls</span>
            <i class="icon-angle-down"></i>
          </a>
          <ul class="nav menu-container">
            <li class="nav-item">
              <a href="#" class="nav-link">All</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">New</a>
            </li>
          </ul>
        </li>
   <!-- <li class="nav-item menu">
        <a href="#"class="nav-link">
            <i class="icon-home"></i>
            <span>Active</span>
            <i class="icon-angle-down"></i>
        </a>
        <ul class="nav menu-container">
            <li class="nav-item">
                <a href="#" class="nav-link">Link 1</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Link 2</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Link 3</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Link 4</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Link 5</a>
            </li>
        </ul>
      </li>-->
    </ul>
  </div>
</aside>
<!-- End Of Sidebar-->

<!-- Main Content -->
<div class="main-content">

  <?php

  require "header.php";
  ?>

  <main class="page">
    <div class="container-fluid">

      <div class="row page-head">
        <div class="col-12 d-flex">
          <h3 class="d-inline">Create Post</h3>
          <nav class="ml-auto" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
          </nav>
        </div>
        <div class="col-12">
          <?php
          require 'includes/posts.php';
          ?>
        </div>
      </div>


      <form action="create-post.php" method="post" enctype="multipart/form-data">
        <div class="row">

          <div class="col-md-8">
            <textarea id="create-post" name="post" class="form-control" rows="15" style="height: 300px"> 
              <p>Write the post content here</p>
            </textarea>
          </div>

          <div class="col-md-4">
            <div class="card-panel">
              <div class="card open">
                <div class="card-header">
                  <h5 class="card-title d-inline">Post Details</h5>
                  <ul class="nav card-tools">
                    <li class="nav-item">
                      <a class="card-min-btn"><i class="icon-angle-up"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="card-cls-btn"><i class="icon-close"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="drop-panel">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="post-title">Post Title</label>
                      <input type="text" name="post-title" id="post-title" class="form-control mb-1" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                      <label for="post-title">Post Summary</label>
                      <input type="text" name="post-summary" id="post-summary" class="form-control mb-1" placeholder="Post Summary">
                    </div>
                    <div class="form-group">
                      <label for="post-pic">Featured Picture</label>
                      <input type="file" name="post-pic" id="post-pic" class="form-control form-control-file mb-1" accept=".jpg, .jpeg, .png">
                    </div>
                    <div class="form-group">
                      <label for="post-categories">Categories</label>
                      <select multiple class="form-control" name="post-categories[]" id="post-categories" class="form-control">
                        <option value="technology">Technology</option>
                        <option value="coding">Coding</option>
                        <option value="scince">Science</option>
                        <option value="CS">CS</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Post</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </form>

    </div>
  </main>
</div>
<!-- End Of Main Content -->



<script src="../lib/jquery/jquery-3.4.1.min.js"></script>
<script src="../lib/jquery-validation/jquery.validate.min.js"></script>
<script src="../lib/jquery.form.min.js"></script>
<script src="../lib/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../lib/summernote/summernote-bs4.min.js"></script>
<script src="js/main.js"></script>
<script>
  $(function () {
    //Add text editor
    $('#create-post').summernote();
  });
</script>
</body>
</html>