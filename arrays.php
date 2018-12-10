<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php
    $peopleArr = ["Joe", "Dennis", "Ruby", "Katie"];
    $carsArr =  array('BMW', 'Ford', 'Fiat', 'Vauxhall');
    echo $peopleArr[1]; //Dennis

    echo'<br />';

    echo $carsArr[0]; //BMW

    echo'<br />';

    echo count($carsArr);//Length

    echo'<br />';

    print_r($carsArr); //Whole array

    echo'<br />';

    var_dump($peopleArr); //Variable type and info

    echo'<br />';

    $citiesArr = array('Chicago' => 'USA', 'London' => 'UK');
    echo $citiesArr['Chicago']; //Associative Array

    echo'<br />';

    $ids = array(26 => 'Rio', 22 => 'Mat', 30 => 'Reza');
    echo $ids[26]; //Associative Array

    echo'<br />';

    $citiesArr['Chicago'] = 1923; //Change an Associative Array
    var_dump($citiesArr['Chicago']);

    echo'<br />';

    $sales = array(
     array('Volkswagen', 20, 10),
     array('Toyota', 30, 20),
     array('Ford', 21, 12),
    ); //Multi-Dimensional Array
    echo $sales[2][1]; //21
  ?>
</body>

</html>
