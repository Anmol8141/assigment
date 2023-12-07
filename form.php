<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
 <h1>FORM </h1>
 <form action="mysql.php" method="POST">
    <lable> Username </lable>
    <input type= "text" name="Username"><br><hr><br>
    <lable> Password </lable>
    <input type= "password" name="Password"><br><hr><br>
    <lable> Email </lable>
    <input type= "text" name="Email"><br><hr><br>
    <lable>Phoneno </lable>
    <input type= "number" name="Phoneno"><br><hr><br>
    <button type="Submit">SUBMIT</button>
</form>
    <?php
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Email=$_POST['Email'];
    $Phone_no=$_POST['Phone_no'];
    ?>
</body>
</html>


