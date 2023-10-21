<?php
//lab task delete the user from database and destroy session
session_start();
include_once "includes/dbh.inc.php";
     $x= $_SESSION['Email'];
	$sql = "delete from users where Email = '$x' ";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo 'user deleted successeful';
    }


	
?>