<?php

$db_connection = mysqli_connect('localhost', 'root', '', 'storage_service');

$user_email = $_POST['user_email'];
$user_name = $_POST['user_name'];
$comment_type = $_POST['comment_type'];
$comment = $_POST['comment'];

if (!$db_connection) {
  die("Connection error: " . mysqli_connect_error());
} else {
  $query = "INSERT INTO `comments`(user_email, user_name, comment_type, user_comment) VALUES('$user_email', '$user_name', '$comment_type', '$comment')";
  if (mysqli_query($db_connection, $query)) {
    header("Location: ../pages/feedback.php");
  } else {
    echo "Query error: " . mysqli_error($db_connection);
  }
}

mysqli_close($db_connection);
