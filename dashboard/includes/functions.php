<?php


/*
Functions go in here
*/

require "db_connect.php";

/* Get Page Head
function getPageHead($title ,$breadcrumbs ,$current) {
  $breadcrumbLinks;
  foreach ($breadcrumbs as $value) {
      
  }

  $pageHead = '<div class="row page-head"><div class="col-12 d-flex"><h3 class="d-inline">' . $title . '</h3>
          <nav class="ml-auto" aria-label="breadcrumb">
            <ol class="breadcrumb"><li class="breadcrumb-item"><a href="#">' . $breadcrumbs[0] . '</a></li>'

}*/

// Get All The Messages
function getMessages($conn) {

  $sql = "SELECT ID, full_name, email, subject, message, entry_time FROM messages";
  $result = mysqli_query($conn, $sql);

  $messages = array();

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singleMessage = array("ID" => $row["ID"] , "fullname" => $row["full_name"] , "subject" => $row["subject"] , "message" => $row["message"] , "entryDate" => $row["entry_time"]);
      array_push($messages, $singleMessage);
    }
  } else {
    return false;
  }

  mysqli_close($conn);

  return $messages;
}


// Get A Single Message
function getSingleMessage($conn ,$id) {
  $sql = "SELECT ID, fullName, email, subject, message, entryDate FROM messages WHERE ID=" . $id . ";";
  $result = mysqli_query($conn, $sql);

  $singleMessage;

  if (mysqli_num_rows($result) === 1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $singleMessage = array("ID" => $row["ID"] , "fullname" => $row["fullName"] , "subject" => $row["subject"] , "message" => $row["message"] , "entryDate" => $row["entryDate"]);
    }
  } else {
    return false;
  }

  mysqli_close($conn);

  return $singleMessage;
}

// Delete A Message
function deleteMessage($conn ,$which) {
  $results;
  if (is_array($which)) {
    $results = array();
    foreach ($which as $id) {
        // sql to delete multiple a record
      $sql = "DELETE FROM messages WHERE id=" . $id . ";";

      if (mysqli_query($conn, $sql)) {
        $results[$id] = true;
      } else {
        $results[$id] = false;
      }

    }
  } else {
    // sql to delete single a record
    $sql = "DELETE FROM messages WHERE id=" . $which . ";";

    if (mysqli_query($conn, $sql)) {
      $results = true;
    } else {
      $results = false;
    }
  }
  
  mysqli_close($conn);

  return $results;
}


?>