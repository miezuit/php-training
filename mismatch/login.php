<?php

if (isset($_COOKIE["username"])) {
  echo "You are logged in with " . $_COOKIE["username"];
  exit();
}

if (!isset($_POST["username"]) || !isset($_POST["password"])) {
  echo "Please enter both username and password";
} else {
  $db = mysqli_connect("127.0.0.1", "root", "1234", "mismatch");

  $query = "select username, email from users where username = ? and password = SHA(?)";
  $statement = $db->prepare($query);

  $statement->bind_param("ss", $_POST["username"], $_POST["password"]);

  $statement->execute();

  var_dump($_POST["username"]);
  var_dump($_POST["password");

  $result = $statement->get_result();

  if ($result->field_count == 1) {
      $row = $data->fetch_array();
      $username = $row['username'];

      set_cookie("username", $username);

      echo "You logged in with " . $row['username'];
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
  <label for="username">Password:</label>
  <input name="password" type="password"/>
  <br/>
  <input type="submit" value="Login"/>
</form>
