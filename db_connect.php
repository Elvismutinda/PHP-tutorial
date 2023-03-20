<?php 

//connect to database
$conn = mysqli_connect('localhost','neville','1234','datatutorial');

//check the connection
if(!$conn){
    echo 'connection failed' . mysqli_connect_error();
}
?>