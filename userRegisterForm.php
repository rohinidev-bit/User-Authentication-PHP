<?php

session_start();

$link = mysqli_connect('localhost', 'root', 'authen123');

mysqli_select_db($link,'user');
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO user_register (FullName, ID, Pass, superID, deptCode, Institute) VALUES (?, ?, ?, ?, ?,?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "ssssss", $FullName, $ID, $Pass, $superID, $deptCode, $Institute);
    
    $FullName = $_REQUEST['FullName'];
    $ID = $_REQUEST['ID'];
    $Pass = $_REQUEST['Pass'];
    $superID = $_REQUEST['superID'];
    $deptCode = $_REQUEST['deptCode'];
    $Institute = $_REQUEST['Institute'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('You are Registered!');</script>";
    } else{
        echo "<script>alert('We could not Register you. Try Again!');</script>";
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?>
