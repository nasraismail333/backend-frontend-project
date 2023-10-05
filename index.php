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
<html lang="en" dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <!-- 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  --> 
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    
    <link rel="stylesheet" href="./css/style.css">
    <title>nasra ismail</title>
</head>
<body>
   

<div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج </p>
      <p class="lead fw-normal"></p>

      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    
  </div>



  <ul class="list-group list-group-flush">
  <li class="list-group-item"> تابع البث المباشر على صفحتي على الفيس بوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">  أقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع </li>
  <li class="list-group-item">خلال فترةالساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">  بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item"> الرابح سيحصل على نسخة مجانية من برنامج كامتاري </li>
</ul>


<form class="mt-5" action="index.php" method="POST">
<h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" value="<?php echo $firstName  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']   ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" value="<?php echo $lastName  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



</div>
<br>

<!--
  delete
<form action="index.php" method="POST">
    <input type="text" name="firstName" placeholder="first name" id="firstName">
    <input type="text" name="lastName"placeholder="last Name"  id="lastName">
    <input type="text" name="email" placeholder="email" id="email">
   <input type="submit" name="submit" id="submit" value="send">

</form>
 -->


<?php foreach($users as $user) :?>
 <h1><?php echo htmlspecialchars($user['firstName']) .' ' . htmlspecialchars($user['lastName']) .'<br> ' 
 . htmlspecialchars($user['email']);?> </h1> 
<?php endforeach;?>






<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
-->
<script src="./js/bootstrap.bundle.min.js" ></script>
<script src="./js/script.js"></script>

</body>
</html>
