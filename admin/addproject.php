<?php
 require '../common/init.php';
 $project_name="";
 $project_level="";
 $unit_code="";
 $faculty="";
if(isset($_POST['project_name'])){
	$project_name = $_POST['project_name'];
	}
 if(isset($_POST['project_level'])){
	$project_level = $_POST['project_level'];
	}
if(isset($_POST['unit_code'])){
	$unit_code = $_POST['unit_code'];
	}
if(isset($_POST['faculty'])){
	$faculty = $_POST['faculty'];
	}
 
 
 

 $query = $db->query("INSERT INTO project(project_name,unit_code,faculty,project_level)VALUES('$project_name','$unit_code','$faculty','$project_level')");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }