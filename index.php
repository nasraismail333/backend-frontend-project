<?php

/* nr  */


include './inc/db.php';
include './inc/form.php';

$sql = 'SELECT * FROM users';
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);




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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>nasra ismail</title>
</head>
<body>
    
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>


<form action="index.php" method="POST">
    <input type="text" name="firstName" placeholder="first name" id="firstName">
    <input type="text" name="lastName"placeholder="last Name"  id="lastName">
    <input type="text" name="email" placeholder="email" id="email">
   <input type="submit" name="submit" id="submit" value="send">

</form>


<?php foreach($users as $user) :?>
 <h1><?php echo htmlspecialchars($user['firstName']) .' ' . htmlspecialchars($user['lastName']) .'<br> ' 
 . htmlspecialchars($user['email']);?> </h1> 
<?php endforeach;?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>

</body>
</html>
