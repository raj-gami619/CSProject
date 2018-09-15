<?php
 require 'init.php';
 $std_name = $_POST['ttr_name'];
 $std_dept = $_POST['ttr_dept'];
 $std_no = $_POST['ttr_no'];
 $std_class = $_POST['ttr_class'];
 $date = date('Y-m-d');

 $query = $db->query("INSERT INTO tutors(name,department,date,)VALUES('$ttr_name','$ttr_dept','$ttr_no','$date')");

//  if($query){
//  	$update = $db->query("UPDATE project SET allocation = 1 WHERE id = '$project_id' ");
//  	echo 'true';

//  }else{
//  	echo 'false';
//  }