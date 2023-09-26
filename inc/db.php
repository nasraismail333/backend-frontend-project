<?php

/* nr  */
$conn = mysqli_connect('localhost','root','root','win3');

if(!$conn){
    echo 'Error: '. mysqli_connect_error();
}
