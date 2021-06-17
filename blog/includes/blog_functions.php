<?php

// Blog Functions

require 'db_connect.php';

$categories = array('technology' ,'coding' ,'science' ,'CS');


/* Get Single Post
 *  @param postId The id of the post being requested
 */
function getSinglePost($conn ,$postId) {
  $sql = "SELECT * FROM blog_posts WHERE post_id='" . $postId . "';";
  $result = mysqli_query($conn, $sql);

  $singlePost;

  if (mysqli_num_rows($result) === 1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singlePost = $row;
    }
  } else {
    return false;
  }

  return $singlePost;
}

// Get All Post
function getPosts($conn) {
  $sql = "SELECT * FROM blog_posts ORDER BY post_date DESC";
  $result = mysqli_query($conn, $sql);

  $posts = array();
  $singlePost;

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singlePost = $row;
      $posts[$singlePost['post_id']] = $singlePost;
    }
  } else {
    return false;
  }

  return $posts;
}

/* Get latest or most recent post
 * @param limit Parses the number of post to get
 */
function getLatestPosts($conn ,$limit) {
  $sql = "SELECT * FROM blog_posts ORDER BY post_date DESC LIMIT " . $limit;
  $result = mysqli_query($conn, $sql);

  $posts = array();
  $singlePost;

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singlePost = $row;
      $posts[$singlePost['post_id']] = $singlePost;
    }
  } else {
    return false;
  }


  return $posts;
}


// Get Category Post(
function getPostsByCategory($conn ,$category) {
  $sql = "SELECT * FROM blog_posts ORDER BY post_date DESC";
  $result = mysqli_query($conn, $sql);

  $posts = array();
  $singlePost;

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singlePost = $row;
      if(in_array($category, explode(';', $singlePost['post_categories']))) {
        $posts[$singlePost['post_id']] = $singlePost;
      }
    }
  } else {
    return false;
  }

  return $posts;
}

function countPostsWithCategory($conn ,$category) {
  $posts = array();
  $posts = getPostsByCategory($conn ,$category);

  return count($posts);
}

// Search Post
function searchPosts($conn ,$q) {

  $searchWords = array();

  $words = explode(' ', trim($q));
  foreach ($words as $word) {
    array_push($searchWords, "post_title LIKE '%" . $word . "%' OR post_author LIKE '%" . $word . "%' OR post_content LIKE '%" . $word . "%' OR post_categories LIKE '%" . $word . "%'"); 
  }

  $searchQuery = implode(" OR ", $searchWords);

  
  $sql = "SELECT * FROM blog_posts WHERE (" . $searchQuery . ") ORDER BY post_date DESC";
  $result = mysqli_query($conn, $sql);

  $posts = array();
  $singlePost;

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singlePost = $row;
      $posts[$singlePost['post_id']] = $singlePost;
    }
  } else {
    return false;
  }

  //mysqli_close($conn);

  return $posts;
}

// Get Comments
function getComments($conn ,$postId) {
  $sql = "SELECT * FROM blog_comments WHERE cmnt_post_id='" . $postId . "' ORDER BY cmnt_date DESC";
  $result = mysqli_query($conn, $sql);

  $comments = array();
  $singleComment;

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singleComment = $row;
      $comments[$singleComment['cmnt_id']] = $singleComment;
    }
  } else {
    return false;
  }

  //mysqli_close($conn);

  return $comments;
}


// Get Author Data
function getAuthor($conn ,$authorName) {
  $sql = "SELECT * FROM blog_authors WHERE author_name='" . $authorName . "';";
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) === 1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $authorData = $row;
    }
  } else {
    return false;
  }

  //mysqli_close($conn);

  return $authorData;
}

// Format date from database records
function formatDate($date) {
  $date = new DateTime($date);

  return date_format($date ,'j M Y');
}

// Format time from database records
function formatTime($time) {
  $time = new DateTime($time);

  return date_format($time ,'g:i a');
}

function postIsLiked($id) {
  if(isset($_COOKIE[$id])) {
    if ($_COOKIE[$id] == true) {
      return true;
    } else {
      return true;
    }
    
  } else {
    return false;
  }
}
?>