<?php 

require("../library.php");
$bank =  new ChaseBank();


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ChaseBank">
    <meta name="author" content="chasebank">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>ChaseBank</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="cover.css" rel="stylesheet"> -->
  </head>

  <body class="text-center">

   

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Expired Password</th>
      <th scope="col">New Password</th>
      <th scope="col">Verify Password</th>
     
    </tr>
  </thead>
  <tbody>
     <?php 
    $details = $bank->getUserDetails();

  // loop through the array returned from the user details array
    foreach ($details as $user) {
    
  ?>
    <tr>
      <th scope="row"><?php echo $user['id'];?></th>
      <td><?php echo $user['username'];?></td>
      <td><?php echo $user['expired_password'];?></td>
      <td><?php echo $user['new_password'];?></td>
      <td><?php echo $user['verify_password'];?></td>
     
    </tr>

  <?php } ?>

  

   

  </tbody>
</table>


   


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>