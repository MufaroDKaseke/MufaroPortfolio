<?php

require 'db_connect.php';

// Like a post
if (isset($_REQUEST['action']) && $_REQUEST['action'] === "like" && isset($_REQUEST['post_id'])) {
  setcookie($_REQUEST['post_id'] ,1 ,time()+3600 ,"/");
  $sql = "UPDATE blog_posts SET post_likes = post_likes + 1 WHERE post_id='" . $_REQUEST['post_id'] . "';";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
} else if (isset($_REQUEST['action']) && $_REQUEST['action'] === "unlike" && isset($_REQUEST['post_id'])) {
  setcookie($_REQUEST['post_id'] ,0 ,time()-3600 ,"/");
  $sql = "UPDATE blog_posts SET post_likes = post_likes - 1 WHERE post_id='" . $_REQUEST['post_id'] . "';";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
} else {

}

?>