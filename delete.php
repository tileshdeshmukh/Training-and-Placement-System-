<?php 
include('db.php');
if(isset($_POST['delete']))
$sql = mysqli_query($conn, "DELETE FROM registration WHERE email = '".$_GET['email']."' ");
if($sql)
{
	header("location:faculty_t.php");
}
?>