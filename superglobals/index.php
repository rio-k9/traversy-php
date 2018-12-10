<?php include 'server_info.php' ?> <!-- body script -->
<?php require '../include/inc/header.php' ?> <!-- script stops with require -->


  <div class="container">

    <h1>Server & File Info</h1>

    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

  <div class="container">

    <h1>Client Info</h1>

    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class="list-group-item">
            <strong><?php echo $key; ?>: </strong>
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

<?php include '../include/inc/footer.php' ?> <!-- script continues with include -->
