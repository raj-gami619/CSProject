<?php
 require '../common/init.php';
if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];

	$query = $db->query("DELETE FROM tutors WHERE id = $id ");
	header('location: create-tutor.php');
}