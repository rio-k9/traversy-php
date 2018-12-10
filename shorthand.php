<?php

  $loggedIn = true;
  echo $loggedIn ? 'You are logged in' : 'You are NOT logged in';

if($loggedIn): ?>
  <br />
  Welcome User
<?php  else: ?>
  <br>
  Welcome Guest
<?php  endif; ?>

<div class="foreach">
  <ul>

  <?php foreach ([
    0 => 'Joe',
    1 => 'Rio',
    2 => 'Kate',
    3 => 'Tony',
    4 => 'Alan']
    as $key => $value): ?>
    <li><?php echo$key.' '.$value ?></li>
  <?php endforeach; ?>

</ul>
</div>
