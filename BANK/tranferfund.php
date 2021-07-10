<?php
 include "BANKCON.php"; 
 $rd =$_GET['rd'];
 $id =$_GET['id'];
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
<body>
<div class="body">
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

<div class="container center_div">
<div class="login-form">
<form action="TRANSFER.php" method="POST">

  <h2>TRANSFER FUND TO</h2>      
  <div class="form-group">
  <select name="to" class="form-control" style="width: 1000x;">
    <option></option>
    <?php
        include "BANKCON.php";  // Using database connection file here
        $records = mysqli_query($con, "SELECT  Username From user");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Username'] ."'>" .$data['Username'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
      </div>
    <h2>TRANSFER FUND FROM ACCOUNT NUMBER</h2>
    <div class="form-group">
            <input  name="Usernamefrom" class="form-control" placeholder="Username" value = "<?php echo "$rd" ?>">
        </div>
        <div class="form-group">
            <input type="int" name="ACCOUNT_NUMBERfrom" class="form-control" placeholder="Account Number" value = "<?php echo "$id" ?>">
        </div>
        <div class="form-group">
            <input type="int" name="AMOUNT" class="form-control" placeholder="AMOUNT" >
        </div>

        <div class="form-group">
            <button type="submit" name="Submit" class="btn btn-primary btn-block">TRANSFER FUND</button>
        </div>
</form>

</div>
</div>
      </div>
</body>
</html>