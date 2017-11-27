<html>
<head>
  <title>Calculator</title>
</head>
<body>
<?php
    $firstNumber = $_POST['firstnumber'];
    $secondNumber = $_POST['secondnumber'];
    $sum = $firstNumber + $secondNumber;

    echo "$firstNumber + $secondNumber = $sum";
?>
</body>
</html>
