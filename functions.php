<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php

  //Function with Param

  function sayName($name = "Rio"){
    echo $name;
  }

  //Function with Return
  function addNumbers($num1, $num2){
    return $num1 + $num2;
  }

  sayName();

  echo '<br />';

  echo addNumbers(2, 3);
  ?>
</body>
</html>
