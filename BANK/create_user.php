<?php

		require('C:\xampp\htdocs\BANK\BANKCON.php');

       $username = $_POST['Username'];
       $AccountNumber = $_POST['ACCOUNT_NUMBER'];
       $email = $_POST['EMAIL'];
       $Balance= $_POST['BALANCE'];


       $sql = "insert into user values ('$username',$AccountNumber,'$email',$Balance)";
      
   if(isset($_POST['Submit']))
   {
   if($username && $AccountNumber && $email && $Balance )
   {
      
           $check = mysqli_query($con,$sql);
           echo "<br/>".$check;
         

         if($check)
         {
            echo "<script type='text/javascript'>alert('USER CREATED SUCCESSFULLY');window.location='./create_user.html';</script>";
         }
         else
         {
            echo "<script type='text/javascript'>alert('USER NOT CREATED PLEASE CHECK ALL FEILDS');window.location='./create_user.html';</script>";
           

         }
      }
      else
      {
         echo "<script type='text/javascript'>alert('Please fill all the fields.');window.location='./create_user.html';</script>";
      
      }
   }
 ?>