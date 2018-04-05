<?php

$username = "";

if (isset($_POST["username"])) {
  $username = $_POST["username"];
  if (!preg_match("/^[A-Za-z_.]{3,8}/", $_POST["username"])) {
    echo "Incorrect username <br />";
  }
}
 ?>

<form method="POST" action="signup.php">
  <label for="username">Username:</label>
  <input type="text" name="username" value="<?php echo $username ?>"/>
  <br />
  <label for="password">Password:</label>
  <input type="password" name="password"/>
  <br />
  <label for="confirm">Confirm password:</label>
  <input type="password" name="confirm"/>
  <br />
  <input type="submit" value="Sign up"/>
</form>
