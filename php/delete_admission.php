<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="school";

$data=mysqli_connect($host,$user,$password,$db);

if($_GET['admission_id'])
{
    $admission_id=$_GET['admission_id'];

    $sql="DELETE FROM admissions WHERE id='$admission_id'";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        $_SESSION['message']= 'Wniosek został usunięty pomyślnie';
        header("location:admission.php");

    }
}


?>