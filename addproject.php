<?php
 require 'init.php';
 $project_name = $_POST['project_name'];
 $project_level = $_POST['project_level'];

 $query = $db->query("INSERT INTO project(project_name,project_level)VALUES('$project_name','$project_level')");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }