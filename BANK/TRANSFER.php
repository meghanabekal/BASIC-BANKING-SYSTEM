<?php

		require('C:\xampp\htdocs\BANK\BANKCON.php');
      error_reporting(0);

        $Usernamefrom = $_POST['Usernamefrom'];
        $ACCOUNTNUMBERFROM = $_POST['ACCOUNT_NUMBERfrom'];
        $to= $_POST['to'];
        $AMOUNT = $_POST['AMOUNT'];

            $sql = "SELECT * from user where Username='$to'";
            $query = mysqli_query($con,$sql);
            $sql = mysqli_fetch_array($query);




       $sql1 = "SELECT  * From user where ACCOUNT_NUMBER=$ACCOUNTNUMBERFROM";
       $check1 = mysqli_query($con,$sql1);
      $sql1 = mysqli_fetch_array($check1);
      
   
   if(isset($_POST['Submit']))
   {
      if($to!="")
      {
    
      if($Usernamefrom && $ACCOUNTNUMBERFROM && $to && $AMOUNT )
      {
         if (($AMOUNT)<0)
   {
      echo "<script type='text/javascript'>alert('Oops!You entered negative number');window.location='./view_user.php';</script>";
    }


  
    // constraint to check insufficient balance.
    else if($AMOUNT > $sql1['BALANCE']) 
    {
      echo "<script type='text/javascript'>alert('Bad Luck! Insufficient Balance');window.location='./view_user.php';</script>";
    }
    


    // constraint to check zero values
    else if($AMOUNT == 0){
      echo "<script type='text/javascript'>alert('Oops! Zero value cannot be transferred');window.location='./view_user.php';</script>";
        
     }
     else if($sql['ACCOUNT_NUMBER']==$sql1['ACCOUNT_NUMBER'])
     {

      echo "<script type='text/javascript'>alert('Oops! INVALID');window.location='./view_user.php';</script>";
     
     }
     else {
        
      // deducting amount from sender's account
         $newbalance = $sql1['BALANCE'] - $AMOUNT;
         $sql3 = "UPDATE user set BALANCE=$newbalance where ACCOUNT_NUMBER=$ACCOUNTNUMBERFROM";
         mysqli_query($con,$sql3);
   

      // adding amount to reciever's account
         $newbalance = $sql['BALANCE'] + $AMOUNT;
         $sql4 = "UPDATE user set BALANCE=$newbalance where Username='$to'";
         mysqli_query($con,$sql4);
      
         $sender = $sql1['Username'];
         $receiver = $sql['Username'];
         $sql5 = "INSERT INTO `transaction` (`Usernamefrom`, `ACCOUNTNUMBERFROM`, `Usernameto`, `AMOUNT`) VALUES ('  $sender',$ACCOUNTNUMBERFROM,'$receiver',$AMOUNT)";
         $query=mysqli_query($con,$sql5);

         if($query){
            echo "<script type='text/javascript'>alert('Hurray! Transaction is Successful');window.location='./view_user.php';</script>";
          
          
      }

    
}   
            
   
      }
      else
      {
         echo "<script type='text/javascript'>alert('FILL ALL FEILDS');window.location='./view_user.php';</script>";
      
      }
   
   }
   else
{
   echo "<script type='text/javascript'>alert('FILL ALL FEILDS');window.location='./view_user.php';</script>";
      
   }
   }
 ?>