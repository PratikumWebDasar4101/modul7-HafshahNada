<?php
include_once 'db.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "Delete From Siswa Where id = '$id'";
	$query_success = mysqli_query($conn,$query);
	if ($query_success){
		header('location: list.php');
	}else{
		die(mysqli_error());
	}
}
?>