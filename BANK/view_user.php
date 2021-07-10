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
<div class="body">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SPARKS BANKING SYSTEM</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="bank.html">HOME</a></li>
      </li>
      <li class="active"><a href="view_user.php">CUSTOMER</a></li>
      <li><a href="view_history.php">TRANSACTION HISTORY</a></li>
    </ul>
  </div>
</nav>

   
    </div>
  <center>
  <strong><em><h1 style="color:white" >USER INFORMTATION</h1></em></strong>
</center>
<div class="mx-auto" style="width:80%";>
<table class="table table-striped ">
    <thead>
    <tr>
    <th style= "width:20%">USER NAME</th>
    <th style= "width:40%">ACCOUNT NUMBER</th>
    <th style= "width:20%">EMAIL</th>
    <th style= "width:20%">BALANCE</th>
     </tr>
    </thead>


    <tbody>

<?php
    require('./BANKCON.php');
    $result = mysqli_query($con,"SELECT * FROM user");

    $i=0;
    while($row = mysqli_fetch_array($result)) {
    if($i%2==0)
    $classname="even";
    else
    $classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row['Username']; ?></td>
<td><?php echo $row['ACCOUNT_NUMBER']; ?></td>
<td><?php echo $row['EMAIL']; ?></td>
<td><?php echo $row['BALANCE']; ?></td>
<td><a href="tranferfund.php?id=<?php echo $row['ACCOUNT_NUMBER'];?>&rd=<?php echo $row['Username'];?>"><button type="button"  class="btn btn-success" >TRANSFER FUND</button></a></td>
<td><a href="view.php?id=<?php echo $row['ACCOUNT_NUMBER'];?>&rd=<?php echo $row['Username'];?>&em=<?php echo $row['EMAIL'];?>&bl=<?php echo $row['BALANCE'];?>"><button type="button"  class="btn btn-success" >VIEW USER</button></a></td>
</tr>
<?php
  $i++;
}
?>
</tbody>
</table>
</div>
</div>
</body>
</html>