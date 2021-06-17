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
          <div class="messages card-panel">
            <div class="card open">
              <div class="card-header">
                <h5 class="card-title d-inline">Messages</h5>
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

                  <form action="messages.php" method="get">
                    <table class="table table-hover">
                      <tbody>
                        <a href="#">
                          <tr class="single-message">
                            <td class="messages-tick">
                              <input type="checkbox" name="ticked" id="" class="form-check-input">
                            </td>
                            <td class="messages-name">
                              <a href="#">Mufaro Kaseke</a>
                            </td>
                            <td class="messages-subject">Lorem ipsum dolor, sit amet consectetur.</td>
                            <td  class="messages-date"><span>2021-03-20 20:23:51</span></td>
                          </tr>
                        </a>

                        <?php

                      // List All Messages

                      // Get Db Connection 
                        require "includes/db_connect.php";
                      // Get Messages
                        require "includes/functions.php";

                        $messages = getMessages($conn);

                        foreach ($messages as $singleMessage) {
                          ?>

                          <a href="#">
                            <tr class="single-message">
                              <td class="messages-tick">
                                <input type="checkbox" name="tick[]" value="<?php echo $singleMessage['ID']; ?>" class="form-check-input">
                              </td>
                              <td class="messages-name">
                                <a href="#"><?php echo $singleMessage["fullname"]; ?></a>
                              </td>
                              <td class="messages-subject"><?php echo $singleMessage["subject"]; ?></td>
                              <td  class="messages-date"><span><?php echo $singleMessage["entryDate"]; ?></span></td>
                            </tr>
                          </a> 

                  <?php } ?>
                      </tbody>
                    </table>

                    <button type="submit" class="btn btn-block btn-danger">SUBMIT</button>

                  </form>
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