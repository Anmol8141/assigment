<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>
 <h1>REGISTRATION PAGE </h1>
 <form action="LoginPage.php" method="POST">
    <lable> Name </lable>
    <input type= "text" name="Name"><br><hr><br>
    <lable> Email </lable>
    <input type= "text" name="Email"><br><hr><br>
    <lable> Contact </lable>
    <input type= "text" name="Contact"><br><hr><br>
    <lable> Pass </lable>
    <input type= "password" name="Pass"><br><hr><br>
    <lable>ConfirmPass </lable>
    <input type= "password" name="ConfirmPass"><br><hr><br>
    
    <button type="Submit">SUBMIT</button>
</form>

<form action="login.php" method="POST">    
    <button type="Submit">Click here to login</button>
</form>


    <?php
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Contact=$_POST['Contact'];
    $Pass=$_POST['Pass'];
    $ConfirmPass=$_POST['ConfirmPass'];
    
    ?>
</body>
</html>