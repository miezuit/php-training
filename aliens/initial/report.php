<html>
<head>
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php

  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $whenItHappened = $_POST['whenithappened'];
  $howLong = $_POST['howlong'];
  $howMany = $_POST['howmany'];
  $alienDescription = $_POST['aliendescription'];
  $whatTheyDid = $_POST['whattheydid'];
  $fangSpotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];
  $to = 'owen@aliensabductedme.com';
  $subject = 'Aliens Abducted Me - Abduction Report';
  $msg = "$name was abducted $whenItHappened and was gone for $howLong.\n" .
    "Number of aliens: $howMany\n" .
    "Alien description: $alienDescription\n" .
    "What they did: $whatTheyDid\n" .
    "Fang spotted: $fangSpotted\n" .
    "Other comments: $other";
  mail($to, $subject, $msg, 'From:' . $email);
  echo 'Thanks for submitting the form.<br />';
  echo 'You were abducted ' . $whenItHappened;
  echo ' and were gone for ' . $howLong . '<br />';
  echo 'Number of aliens: ' . $howMany . '<br />';
  echo 'Describe them: ' . $alienDescription . '<br />';
  echo 'The aliens did this: ' . $whatTheyDid . '<br />';  echo 'Was Fang there? ' . $fangSpotted . '<br />';
  echo 'Other comments: ' . $other . '<br />';
  echo 'Your email address is ' . $email;
  
?>

</body>
</html>
