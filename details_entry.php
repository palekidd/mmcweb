<?php
$server_name="sql12.freemysqlhosting.net";
$username="sql12595343";
$password="W7ZUQCzVl7";
$database_name="sql12595343";



$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection_aborted
if(!$conn)
{
		die("Connection Failed:" . mysqli_connect_error());
}




if(isset($_POST['save']))
{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		
//For inserting the values to mysql database_name
		$sql_query = "INSERT INTO details_entry 
(first_name,last_name,gender,email,phone)
		VALUES ('$first_name','$last_name','$gender','$email','$phone')";

	if (mysqli_query($conn, $sql_query))
{
		echo "new Details Entry inserted successfully !";
}
	else 
{
		echo "error: " . $sql . "" . mysqli_error($conn);
}
	mysqli_close($conn);
}
?>
	
