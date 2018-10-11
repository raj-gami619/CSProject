<?php
 require 'init.php';
 $id="";
 $ttr_name = "";
 $ttr_dept = "";
 $ttr_no = "";
 $email = "";
 $password = "";
 $date = date('Y-m-d');

if(isset($_POST['ttr_name'])){
	$ttr_name = $_POST['ttr_name'];
	}
if(isset($_POST['ttr_dept'])){
	$ttr_dept = $_POST['ttr_dept'];
	}
if(isset($_POST['ttr_no'])){
	$ttr_no = $_POST['ttr_no'];
	}
if(isset($_POST['email'])){
	$email = $_POST['email'];
	}
if(isset($_POST['password'])){
	$password = $_POST['password'];
	}
 $query = $db->query("INSERT INTO tutors(name,department,matric,date,email,password)VALUES('$ttr_name','$ttr_dept','$ttr_no','$date','$email','$password')");

 if($query){
    $update = $db->query("UPDATE tutors SET allocation = 1 WHERE id = '$id' ");
    echo 'true';

}else{
    echo 'false';
}