<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if(isset($_POST['submit'])){
    //echo $firstname . '/ '. $lastname .'// '.$email;

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']) ;

    $sql = "INSERT INTO users (firstName, lastName, email)
     VALUES ('$firstName' , '$lastName', '$email') ";

if(empty($firstName)){
    echo 'first name is empty';
}elseif(empty($lastName)){
    echo 'last name is empty';
}elseif(empty($email)){
    echo 'email is empty';
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo 'the email is unavailable';
}else{
    if(mysqli_query($conn, $sql)){
        header('Location: index.php');
     }else{
         echo 'Error: '. mysqli_error($conn);
     }

}

}


?>




