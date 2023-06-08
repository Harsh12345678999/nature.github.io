<?php

$con = mysqli_connect('localhost:3307','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'websiteuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO  userinfodata (user, email, mobile, comment) VALUE ('$user','$email','$mobile','$comment')";

mysqli_query($con, $query);

?>