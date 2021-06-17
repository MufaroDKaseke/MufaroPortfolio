<?php

// Adding Newsletter Subscription

require 'includes/db_connect.php';

function addSub($conn ,$email) {
  // Insert Comment
    $stmt = mysqli_prepare($conn, "INSERT INTO blog_subs VALUES (NULL, ?, CURRENT_TIMESTAMP);");
    mysqli_stmt_bind_param($stmt, 's', $email);

    /* execute prepared statement */
    if(mysqli_stmt_execute($stmt)) {
      echo '<span class="text-success">Succesfully added new subscription!!!</span>';
      return true;
    } else {
      echo '<span class="text-danger">Error adding new subscription!!!</span>';
      return false;
    }

    /* close statement and connection */
    mysqli_stmt_close($stmt);
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'subscribe') {
  if (isset($_GET['email']) && $_GET['email'] !== '') {
    $email = $_GET['email'];
    addSub($conn ,$email);
  } else {
    echo '<span class="text-danger">Error adding new subscription!!!<br>Email not present or empty</span>';
  }
}

mysqli_close($conn);

?>