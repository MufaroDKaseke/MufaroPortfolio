<?php

require 'db_connect.php';

// Generate postId
function generateId() {
  return uniqid('post-');
}

// Upload image
function uploadImg($file ,$postId) {
  if ($file['error'] === 0) {
    $ext = explode('.', $file['name']);
    $newName = $postId . '.' . $ext[count($ext) - 1];
    $destination = '../blog/img/' . $newName;
    $success = move_uploaded_file($file['tmp_name'], $destination);
    if ($success) {
      return $newName;
    } else {
      die('Error : Could\'t create new post ,error uploading image ,try again!!!');
    }
  } else {
    die('Error : Could\'t create new post ,image has error ,try again!!!');
  }
}

/* Creating A Post */

if (isset($_REQUEST['post'])) {
  if (isset($_REQUEST['post-title'])) {
    $postId = generateId();
    $postTitle = $_REQUEST['post-title'];
    $postSummary = '';
    $postAuthor = 'Mufaro D Kaseke';
    $postContent = trim($_REQUEST['post']);
    $postLikes = 0;
    $postCategories = implode(";", $_REQUEST['post-categories']);
    $postPic = uploadImg($_FILES['post-pic'] ,$postId);
    $postComments = 0;

    $stmt = mysqli_prepare($conn, "INSERT INTO blog_posts VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
    mysqli_stmt_bind_param($stmt, 'sssssissi', $postId, $postTitle, $postAuthor, $postSummary, $postContent, $postLikes, $postCategories, $postPic, $postComments);

    /* execute prepared statement */
    mysqli_stmt_execute($stmt);

    echo '<span class="text-success">Succesfully added new post</span>';

    /* close statement and connection */
    mysqli_stmt_close($stmt);

    /* close connection */
    mysqli_close($conn);
  } else {
    echo "Error : Title not present or empty";  
  }
}


?>