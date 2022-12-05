<?php 
$host="localhost";

$user="root";

$password="";

$db="login";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $username = $_POST['username'];
    $email = $_POST['email'];
	$pass = $_POST['password'];

    $sql="INSERT INTO user (username, email, usertype, password) VALUES ('$username', '$email', 'student', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
    
}
?>