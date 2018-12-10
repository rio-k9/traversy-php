<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php

    /*
    For loop
    for ($i=0; $i < ; $i++) {
      // code...
    }

    While loop
    while ($a <= 10) {
      // code...
    }

    Do While
    do {
      // code...
    } while ($a <= 10);

    Foreach
    foreach ($variable as $key => $value) {
      // code...
    }
    */

    for($i = 0; $i < 10; $i++){
      echo 'Number '.$i;
      echo '<br />';
    }
    echo '<br />';

    $i = 0;
    while($i < 10){
      echo 'While '. $i;
      echo '<br />';
      $i++;
    }
    echo '<br />';
    $i = 0;
    do {
      echo 'Do while '. $i;
      echo '<br />';
      $i++;
    }
    while ($i < 10);

    echo '<br />';
    $peopleArr = array('Rio', 'Michael', 'Jesus', 'Scott');
    foreach ($peopleArr as $key => $value) {
      echo $key. ' => '. $value;
      echo '<br />';
    }

    echo '<br />';
    $carsArr = array('BMW' => 'i5', 'Ford' => 'Mustang', 'Toyota' => 'Celica');
    foreach ($carsArr as $key => $value) {
      echo $key. ' => '. $value;
      echo '<br />';
    }
  ?>

</body>
</html>
