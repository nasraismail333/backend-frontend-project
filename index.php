<?php

/* nr  */


include './inc/db.php';
include './inc/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach($users as $user){
  echo $user['firstName'];
}



/*  
delete
echo '<pre>';
print_r($users);
//print_r($result);
echo '</pre>';
 */

mysqli_free_result($result);
mysqli_close($conn);


/* 


  */





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>nasra ismail</title>
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
