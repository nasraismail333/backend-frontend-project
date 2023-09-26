<?php

/* nr  */


include './inc/db.php';


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if(isset($_POST['submit'])){
    //echo $firstname . '/ '. $lastname .'// '.$email;
    $sql = "INSERT INTO users(firstName, lastName, email)
     VALUES ('$firstName' , '$lastName', '$email') ";

if(empty($firstName)){
    echo 'first name is empty';
}elseif(empty($lastName)){
    echo 'last name is empty';
}elseif(empty($email)){
    echo 'email is empty';
}else{
    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
     }else{
         echo 'Error: '. mysqli_error($conn);
     }

}





   

}




/* 


  */





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>nasra</title>
</head>
<body>
    

<form action="index.php" method="POST">
    <input type="text" name="firstName" placeholder="first name" id="firstName">
    <input type="text" name="lastName"placeholder="last Name"  id="lastName">
    <input type="text" name="email" placeholder="email" id="email">
   <input type="submit" name="submit" id="submit" value="send">

</form>










<script src="./js/script.js"></script>

</body>
</html>