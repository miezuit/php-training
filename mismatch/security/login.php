<?php

session_start();

if (isset($_SESSION["username"])) {
  echo "You logged in with " . $_SESSION["username"] . "<br />";
  echo "To logout click <a href='logout.php'>here</a>";
  exit();
}

if (!isset($_POST["username"]) || !isset($_POST["password"])) {
  echo "Please enter both username and password";
} else {
  $db = mysqli_connect("127.0.0.1", "root", "1234", "mismatch");

  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "select username, email from users where username = '$username' and password = SHA('$password')";

  $statement = $db->prepare($query);

  $statement->execute();
  $result = $statement->get_result();

  if ($result->num_rows == 1) {
      $row = $result->fetch_array();
      $username = $row['username'];

      $_SESSION["username"] = $username;

      header("Location: index.php");
      exit();
  } else {
     echo "Incorrect user or password";
  }
}
?>
<form action="login.php" method="POST">
  <label for="username">Username:</label>
  <input name="username" type="text"/>
  <br/>
  <label for="password">Password:</label>
  <input name="password" type="password"/>
  <br/>
  <input type="submit" value="Login"/>
</form>
