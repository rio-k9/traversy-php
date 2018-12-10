<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php

  echo date('d'); // Day

  echo '<br />';

  echo date('d-m-y'); // ddmmyy

  echo '<br />';

  echo date('d-m-Y'); // ddmmyyyy

  echo '<br />';

  echo date('l'); // The Day in the Week

  echo '<br />'.date('Y/m/D'); // 2018/12/Sun

  echo '<br />'.date('h').'H'; //Hour
  echo '<br />'.date('i').'MIN'; //Min
  echo '<br />'.date('s').'SEC'; //Seconds
  echo '<br />'.date('a'); //AM or PM

  // Set timezone
  date_default_timezone_set('Europe/London');
  echo '<br />'.date('h:i:sa'); //Time

  //Timestamp
  $timestamp = mktime(8, 10, 11 , 18, 8, 1992);
  echo '<br />'.date('m/d/Y h:i:sa', $timestamp);

  $timestamp2 = strtotime('10:00pm August 18 1992');
  $tomorrow = strtotime('tomorrow');
  $nextSunday = strtotime('next Sunday');
  $nextTwoDays = strtotime('+2 Days');
  echo '<br />'.date('d/m/Y h:i:sa', $timestamp2);
  echo '<br />'.date('d/m/Y h:i:sa', $tomorrow);
  echo '<br />'.date('d/m/Y h:i:sa', $nextSunday);
  echo '<br />'.date('d/m/Y h:i:sa', $nextTwoDays);



  ?>
</body>
</html>
