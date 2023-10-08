<?php

/* nr  */


include './inc/db.php';
include './inc/form.php';


include './inc/db_close.php';

include './inc/select.php';



/*  
delete
echo '<pre>';
print_r($users);
//print_r($result);
echo '</pre>';
 */


/* 


  */
  //
  mysqli_free_result($result);
  mysqli_close($conn);
?>



<?php include_once './parts/header.php';


/*
 include_once './parts/footer.php';

 */


 

  ?>
   




      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج </p>
      <p class="lead fw-normal"></p>

      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    




<ul class="list-group list-group-flush">
  <li class="list-group-item"> تابع البث المباشر على صفحتي على الفيس بوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">  أقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع </li>
  <li class="list-group-item">خلال فترةالساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">  بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item"> الرابح سيحصل على نسخة مجانية من برنامج كامتاري </li>
</ul>

 
  



<div class="position-relative  text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF']  ?>" method="POST">
<h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName  ?>" >
    <div  class="form-text error"><?php echo $errors['firstNameError']   ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName  ?>" >
    <div  class="form-text error"> <?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email  ?>" >
    <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary"> إرسال البيانات </button>
</form>

</div>
    
  </div>



<!-- 
</div>
 -->



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

<div class="row">
<?php foreach($users as $user) :?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
 <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']) .' ' . htmlspecialchars($user['lastName'])?> </h5> <br>  
  <p class="card-text"> <?php echo htmlspecialchars($user['email']) ?></p>
    </div>
  </div>
</div>
<?php endforeach;?>
</div>
 









<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
-->
