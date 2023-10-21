<?php
  include_once "includes/dbh.inc.php";
?>

<h1>Sign Up</h1>
<!DOCTYPE html>
<html>
   <head>
     <title></title>
   </head>

   <body>
   <form action="" method="post">

   <label>First Name:</label><br>
  <input type="text" name="FName"><br>

  <label>Last Name:</label><br>
  <input type="text" name="LName"><br>

  <label>Email:</label><br>
  <input type="text" name="Email"><br>

  <label>Password:</label><br>
  <input type="Password" name="Password"><br>

  <label>Hobby:</label><br>
  <input type="text" name="Hobby"><br>

  <input type="submit" value="Submit" name="Submit">
  <input type="reset">

</form>
<?php
 //grap data from user if form was submitted 

  if($_SERVER["REQUEST_METHOD"]=="POST"){ //check if form was submitted
	$Fname=htmlspecialchars($_POST["FName"]);
	$Lname=htmlspecialchars($_POST["LName"]);
	$Email=htmlspecialchars($_POST["Email"]);
	$Password=htmlspecialchars($_POST["Password"]);
	$Hobby=htmlspecialchars($_POST["Hobby"]);

    //insert it to database 
	$sql="insert into users(FirstName,LastName,Email,Password,Hobby) 
	values('$Fname','$Lname','$Email','$Password','$Hobby')";
	$result=mysqli_query($conn,$sql);

    //redirect the user back to index.php 
	if($result)	{
		header("Location:index.php");
	}
}

?>

   </body>

</html>