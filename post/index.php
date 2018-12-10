<?php
include '../include/inc/header.php';
/*


if(isset($_REQUEST['name'])){

 echo htmlentities($_REQUEST['name']);
}
*/
if(isset($_POST['name'])){

  echo htmlentities($_POST['name']);
  print_r($_POST);
}


?> <!-- script continues with include -->

<h1>Get & Post</h1>

<div class="container">
  <form class="col-12" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name">
    </div>
    <div class="form-group">
      <label for="name">Email</label>
      <input type="email" name="email">
    </div>
    <input type="submit" name="submit" value="Send">
  </form>
</div>

<?php include '../include/inc/footer.php' ?> <!-- script continues with include -->
