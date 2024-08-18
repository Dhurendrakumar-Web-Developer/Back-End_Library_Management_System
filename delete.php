<?php 
include("connection.php");
error_reporting(0);

$dhurendra=$_GET['email'];
$query="DELETE FROM book_register WHERE Email_Address ='$dhurendra'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('The Book Has Been Successfully Submitted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL= http://localhost/Dhurendra%20Project/book_submit.php">
    <?php
}
else
{
    echo "<script>alert('The Book Has Been Unsuccessfully Submitted')</script>";
}
?>