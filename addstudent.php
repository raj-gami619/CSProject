<?php
 require 'init.php';
 
 $std_name = "";
 $std_dept = "";
 $std_no = "";
 $std_class = "";
 $email = "";
 $password = "";
 $date = date('Y-m-d');

if(isset($_POST['std_name'])){
	 $std_name = $_POST['std_name'];
	}
if(isset($_POST['std_dept'])){
	 $std_dept = $_POST['std_dept'];
	}
if(isset($_POST['std_no'])){
	 $std_no = $_POST['std_no'];
	}
if(isset($_POST['std_class'])){
	 $std_class = $_POST['std_class'];
	}
if(isset($_POST['email'])){
	 $email = $_POST['email'];
	}
if(isset($_POST['password'])){
	 $password = $_POST['password'];
	}

 $query = $db->query("INSERT INTO student(name,department,level,matric,date,email,password)VALUES('$std_name','$std_dept','$std_class','$std_no','$date','$email','$password')");