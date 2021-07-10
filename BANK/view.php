<?php
 include "BANKCON.php"; 
 $rd =$_GET['rd'];
 $id =$_GET['id'];
 $em =$_GET['em'];
 $bl =$_GET['bl'];
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="bank.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SPARKS BANKING SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="bank.html">HOME</a></li>
      </li>
      <li><a href="view_user.php">CUSTOMER</a></li>
      <li><a href="view_history.php">TRANSACTION HISTORY</a></li>
    </ul>
  </div>
</nav>
<div class="login-form ">
<div class="text-center">    
<div class="col-md-11">
<h1 style="color:white;">VIEW CUSTOMER</h1>  
<img src="USER.jpg" alt="Image" style="max-width:30%;"> 
  
<strong><em><h1 style="color:white" >NAME  :  <?php echo "$rd" ?></h3></em></strong>
<strong><em><h1 style="color:white" >ACCOUNT NUMBER :  <?php echo "$id" ?></h3></em></strong>
<strong><em><h1 style="color:white" >EMAIL  :  <?php echo "$em" ?></h3></em></strong>
<strong><em><h1 style="color:white" >BALANCE :  <?php echo "$bl" ?></h3></em></strong>


</div>
</div>
</div>
</body>
</html>