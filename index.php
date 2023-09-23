<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

if(isset($_POST['submit'])){
    echo $firstname . '/ '. $lastname .'// '.$email;

}





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