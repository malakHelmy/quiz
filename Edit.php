<?php
//start session
session_start();
//include database connection file
include_once("includes/dbh.inc.php");

?>



<?php
if($_SERVER['REQUEST_METHOD']== "POST"){ //check if form was submitted
//check if form is submitted
//if form is submitted, grap data from user if form was submitted and update the user's data on database using update
$Email=$_POST["Email"];
$pass=$_POST["Password"];
$fn=$_POST["FName"];
$ln=$_POST["LName"];
$em=$_POST["Email"];
$ho=$_POST["Hobby"];

$sql="update users set FirstName='$fn', LastName='$ln', Email='$ln', Password='$ln',Hobby='$ho'
where ID =".$_SESSION['ID'];
$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result)) {
$_SESSION['ID']= $row[0];
$_SESSION['FName']= $row[0];
$_SESSION['LName']= $row[0];
$_SESSION['Password']= $row[0];
$_SESSION['Email']= $row[0];
$_SESSION['Hobby']= $row[0];

header("Location:index.php");

}else{
echo "invalid input";
}
}
//check if update is successful
//if update is successful don't forget to update the seesion variables too the redirect to index.php

?>