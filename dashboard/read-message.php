<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mufaro Kaseke | Dashboard - Messages</title>
  <link rel="stylesheet" href="../lib/animate/animate.css">
  <link rel="stylesheet" href="../lib/icomoon/icomoon.css">
  <link rel="stylesheet" href="../lib/bootstrap/bootstrap.min.css">
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
          <h3 class="d-inline">Inbox</h3>
          <nav class="ml-auto" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">

        <div class="col-12">
          <div class="read-message card-panel">
            <div class="card open">
              <div class="card-header">
                <h5 class="card-title d-inline">  Read Message</h5>
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
                <div class="card-body pt-1">
                  <div class="read-message">
                    <div class="message-tools d-flex align-items-center justify-content-between">
                      <ul class="nav nav-inline">
                        <li>
                          <button type="button" class="btn">
                            <i class="icon-mail-reply"></i>
                          </button>
                          <button type="button" class="btn">
                            <i class="icon-mail-forward"></i>
                          </button>
                          <button type="button" class="btn">
                            <i class="icon-print"></i>
                          </button>
                          <button type="button" class="btn">
                            <i class="icon-trash"></i>
                          </button>
                        </li>
                      </ul>
                      <span class="date small">2021-03-20 20:23:51</span>
                    </div>
                    <div class="message-header">
                      <h5 class="message-subject">Lorem ipsum dolor sit amet consectetur.</h5>
                      <h6 class="message-name">From : <span>Mufaro D Kaseke</span> <a href="#" class="messsage-email">mufarodkaseke@gmail.com</a></h6>
                    </div>
                    <div class="message-body">
                      <p>
                        Hello Mufaro,<br><br>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Facere molestias voluptate sint ullam quae nesciunt, est aspernatur excepturi odit, consequuntur possimus unde consequatur itaque, ducimus officia asperiores eveniet aperiam perspiciatis, consectetur sapiente recusandae adipisci. Inventore veritatis, beatae velit perspiciatis enim.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!--<div class="col-6">
          <div class="card-panel">
            <div class="card open">
              <div class="card-header">
                <h5 class="card-title d-inline">Card Title</h5>
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
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
              </div>
              
            </div>
          </div>
        </div>-->

      </div>
    </div>
  </main>
</div>
<!-- End Of Main Content -->



<script src="../lib/jquery/jquery-3.4.1.min.js"></script>
<script src="../lib/jquery-validation/jquery.validate.min.js"></script>
<script src="../lib/jquery.form.min.js"></script>
<script src="../lib/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>