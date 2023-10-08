<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];


$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',


];


if(isset($_POST['submit'])){
    //echo $firstname . '/ '. $lastname .'// '.$email;

    

    
if(empty($firstName)){
    $errors['firstNameError'] = 'first name is empty';
   // echo 'first name is empty';
}if(empty($lastName)){
    $errors['lastNameError'] = 'last name is empty';
    //echo 'last name is empty';
}if(empty($email)){
    $errors['emailError'] = 'email is empty';
    //echo 'email is empty';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'the email is unavailable';
    //echo 'the email is unavailable';
}
if(!array_filter($errors)){
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']) ;

    $sql = "INSERT INTO users (firstName, lastName, email)
     VALUES ('$firstName' , '$lastName', '$email') ";


    if(mysqli_query($conn, $sql)){
        header('Location: ' . $_SERVER['PHP_SELF'] );
    }else{
        echo 'Error: '. mysqli_error($conn);
    }
}
}
/*

//tempority move










*/
?>




