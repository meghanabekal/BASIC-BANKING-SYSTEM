<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="bank.css">
<title>user data</title>
<style type="text/css">

table,td,tr{
  border-collapse:collapse;
  font-family:monospace;
  font-size:25px;
  width: 350px;
  border:2px solid black;
  margin-left:150px;

}
th{
    background-color:white;
    color:black;
}

tr:nth-child(even){ background-color:#f2f2f2;}
</style>
</head>
<body>
<div class='body'>      
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" >SPARKS BANKING SYSTEM</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="bank.html">HOME</a></li>
        </li>
        <li> <a href="view_user.php">CUSTOMER</a></li>
        <li  class="active"><a href="view_history.php">TRANSACTION HISTORY</a></li>
      </ul>
    </div>
  </nav>
</div>

<center>
<strong><em><h1 style="color:white;">TRANSACTION HISTORY</h1></strong></em>
</center>
<div class="mx-auto" style="width:80%";>
<table class="table table-striped ">
    <thead>
    <tr>
    <th style= "width:15%">SENDER</th>
    <th style= "width:25%">SENDER'S ACCOUNT NUMBER</th>
    <th style= "width:10%">RECIVER</th>
    <th style= "width:10%">AMOUNT</th>
    <th style= "width:40%">DATE AND TIME</th>
`   </tr>
    </thead>


    <tbody>

<?php
  require('./BANKCON.php');
  $result = mysqli_query($con,"SELECT * FROM transaction");

  $i=0;
  while($row = mysqli_fetch_array($result)) {
  if($i%2==0)
  $classname="even";
  else
  $classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row['Usernamefrom']; ?></td>
<td><?php echo $row['ACCOUNTNUMBERFROM']; ?></td>
<td><?php echo $row['Usernameto']; ?></td>
<td><?php echo $row['AMOUNT']; ?></td>
<td><?php echo $row['DATEandTIME']; ?></td>
</tr>
<?php
$i++;
}
?>
</tbody>
</table>
</div>

</body>
</html>