<?php

session_start();
$con = mysqli_connect('localhost', 'root', 'authen123');
mysqli_select_db($con,'nito');

$ID = $_POST['user'];
$Pass = $_POST['password'];

$s = " select * from user_register where ID = '$ID' && Pass = '$Pass';";
$result =  mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['display_username'] = $ID;
    header('location:http://localhost:5000/');
}else {
    echo"got in";
    header('location:htlogin.php');   
}

mysqli_close($con);
?>
