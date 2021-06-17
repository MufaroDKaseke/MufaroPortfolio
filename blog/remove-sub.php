<?php

// Removing Newsletter Subscription

require 'db_connect.php';

function removeSub($conn ,$email) {
  // Insert Comment
    $stmt = mysqli_prepare($conn, "DELETE FROM blog_subs WHERE sub_email=?");
    mysqli_stmt_bind_param($stmt, 's', $email);

    /* execute prepared statement */
    if(mysqli_stmt_execute($stmt)) {
      echo '<span class="text-success">Succesfully removed subscription!!!</span>';
      return true;
    } else {
      echo '<span class="text-danger">Error adding removing subscription!!!</span>';
      return false;
    }

    /* close statement and connection */
    mysqli_stmt_close($stmt);
}

if (isset($_GET['action']) && $_GET['action'] === 'remove-sub') {
  if (isset($_GET['email']) && $_GET['email'] !== '') {
    $email = $_GET['email'];
    removeSub($conn ,$email);
  } else {
    echo '<span class="text-danger">Error removing subscription!!!<br>Email not present or empty</span>';
  }
}

mysqli_close($conn);

?>