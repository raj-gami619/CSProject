<?php
 require '../common/init.php';
 $std_name = $_POST['std_name'];
 $std_dept = $_POST['std_dept'];
 $std_no = $_POST['std_no'];
 $std_class = $_POST['std_class'];
 $std_id = $_POST['std_id'];
 $email = $_POST['email'];
 $query = $db->query("UPDATE student SET name = '$std_name',department = '$std_dept',matric = '$std_no',level = '$std_class',email = '$email' WHERE id = '$std_id' ");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }