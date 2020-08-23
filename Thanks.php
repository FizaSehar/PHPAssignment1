<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
 
 <?php

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


    echo "<h1> Welcome </h1>", $first_name;
    echo "<br>";
    echo  $last_name;
    echo "<br>";
    echo  $birthday;
    echo "<br>";
    echo   $gender;
    echo "<br>";
    echo   $email;
    echo "<br>";
    echo   $phone;
    echo "<br>";
    
   
?>
</body>
</html>