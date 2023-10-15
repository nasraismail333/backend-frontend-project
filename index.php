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
mysqli_free_result($result);
  mysqli_close($conn);

  */
  //
  
?>



<?php include_once './parts/header.php';


/*
 include_once './parts/footer.php';

 */


 

  ?>
   


   <div class="position-relative  text-center">
    <div class="col-md-5 p-lg-5 mx-auto ">

      <img src="images/student.png" alt="">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج </p>
      <h3 id="demo"></h3>

      <p class="lead fw-normal"></p>
    
      </div>

<div class="container">
  <h3> للدخول في السحب اتبع ما يلي  </h3>
<ul class="list-group list-group-flush">
  <li class="list-group-item"> تابع البث المباشر على صفحتي على الفيس بوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">  أقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع </li>
  <li class="list-group-item">خلال فترةالساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">  بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item"> الرابح سيحصل على نسخة مجانية من برنامج كامتاري </li>
</ul>

</div>

</div>


 
 
<div class="container">

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
<div id="demo">jjjjjjjjjjjjjj</div>
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


 
 <!--
  delete
   <button id="winner" type="button" class="btn btn-primary"> اختيار الرابح </button>-->

    <div class="loader-con">
   <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

 <!-- Button trigger modal -->

 <div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
  

اختيار الرابح
</button>
</div>
<!-- Modal -->

<!--  -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

      <h5 class="modal-title" id="modalLabel"> الرابح في المسابقة </h5>


        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) :?>
        <h1 class="display-3 text-center modal-title" id="exampleModalLabel"> <?php echo htmlspecialchars($user['firstName']) .' ' . htmlspecialchars($user['lastName'])?></h1>
        <?php endforeach;?>
      </div>
      
  </div>
</div>






<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        الرابح
      </div>
      
  </div>
</div -->
        

<!--
div id="cards" class="row mb-5 pb-6">

  <div class="col-sm-6">
    <div class="card my-2 bg-light">
      <div class="card-body">
 <h5 class="card-title"> </h5> <br>  
  <p class="card-text"> ?php echo htmlspecialchars($user['email']) ?></p>
    </div>
  </div>
</div>
</div>
-->










 
<!-- 
delete

<div id="cards" class="row mb-5 pb-6">

  <div class="col-sm-6">
    <div class="card my-2 bg-light">
      <div class="card-body">
 <h5 class="card-title"> </h5> <br>  
  <p class="card-text">    <delete <php echo htmlspecialchars($user['email']) ?></p>
    </div>
  </div>
</div>
</div>
 -->



<?php include_once './parts/footer.php';

mysqli_free_result($result);
  mysqli_close($conn);
?>











<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
-->
