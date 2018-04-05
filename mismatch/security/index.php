<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

echo "Hello! You are logged in with " . $_SESSION['username'] . "<br />";
echo "To logout click <a href='logout.php'>here</a>";

?>
