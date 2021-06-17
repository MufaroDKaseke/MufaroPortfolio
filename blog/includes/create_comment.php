<?php

// Create Comment

require 'db_connect.php';

// Generate a unique id for the new comment
function genCommentId() {
  return uniqid();
}


// Increase the number of comments in the post record
function increaseCmnts($conn ,$postId) {

  $sql = "UPDATE blog_posts SET post_cmnts = post_cmnts + 1 WHERE post_id='" . $postId . "';";

  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}



if (isset($_REQUEST['post-id'])) {
  if(isset($_REQUEST['name']) && isset($_REQUEST['email']) && isset($_REQUEST['comment'])) {

    $postId = $_REQUEST['post-id'];
    $commentId = genCommentId();
    $commentAuthor = trim($_REQUEST['name']);
    $commentEmail = trim($_REQUEST['email']);
    $commentContent = trim($_REQUEST['comment']);



    
    // Insert Comment
    $stmt = mysqli_prepare($conn, "INSERT INTO blog_comments VALUES (NULL, ?, ?, ?, ?, ?, '', CURRENT_TIMESTAMP);");
    mysqli_stmt_bind_param($stmt, 'sssss', $commentId, $postId, $commentAuthor, $commentEmail, $commentContent);

    /* execute prepared statement */
    mysqli_stmt_execute($stmt);
    echo '<div class="text-center">
            <i class="icon-check-circle-o text-success" style="font-size: 3rem;"></i>
          </div>
          <div class="success-msg">
            <h5 class="text-center my-3">Your comment was successfully submited...</h5>
            <div class="col text-center">
              <button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
          </div>';

    /* close statement and connection */
    mysqli_stmt_close($stmt);

    // Insert new comment's id into the post's `post_cmnts_ids` field
    increaseCmnts($conn ,$postId);
  } else {
    echo "Error : Couldn't create comment ,some data is missing!!!";
  }
} else {
  echo "Error : Couldn't create comment ,post-id missing!!!";
}

mysqli_close($conn)


?>