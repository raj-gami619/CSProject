<?php
 require 'init.php';
 $project_name = $_POST['project_name'];
 $project_level = $_POST['project_level'];
 $project_id = $_POST['project_id'];

 $query = $db->query("UPDATE project SET project_name = '$project_name',project_level = '$project_level'WHERE id = '$project_id' ");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }