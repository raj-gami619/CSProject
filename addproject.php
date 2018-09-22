<?php
 require 'init.php';
 $project_name = $_POST['project_name'];
 $project_level = $_POST['project_level'];
 $unit_code = $_POST['unit_code'];
 $faculty = $_POST['faculty'];

 $query = $db->query("INSERT INTO project(project_name,unit_code,faculty,project_level)VALUES('$project_name','$unit_code','$faculty','$project_level')");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }