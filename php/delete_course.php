<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="school";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['course_id'])
{
    $course_id=$_GET['course_id'];

    $sql="DELETE FROM course WHERE id='$course_id'";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']= 'Kurs został usunięty pomyślnie';
        header("location:courses.php");

    }
}


?>