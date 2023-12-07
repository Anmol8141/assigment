<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn= mysqli_connect($servername,$username,$password,$dbname);


$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Contact=$_POST['Contact'];
$Pass=$_POST['Pass'];
$ConfirmPass=$_POST['ConfirmPass'];

if($Pass==$ConfirmPass)
    {
      echo"succesfully logined";
$sql= "INSERT INTO `Students` (`Name`,`Email`,`Contact`,`Pass`,`ConfirmPass`) VALUES ('$Name','$Email','$Contact','$Pass','$ConfirmPass')";
$rs = mysqli_query($conn,$sql);
if($rs>0)
{
  echo"Connect Records Inserted"; 
}
  
     
    } 
else
{
  echo("enter correct crendential");
}

?>