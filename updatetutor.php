<?php
 require 'init.php';
 $ttr_name = $_POST['ttr_name'];
 $ttr_dept = $_POST['ttr_dept'];
 $ttr_no = $_POST['ttr_no'];
 $ttr_id = $_POST['ttr_id'];
 $query = $db->query("UPDATE tutors SET name = '$ttr_name',department = '$ttr_dept',matric = '$ttr_no' WHERE id = '$ttr_id' ");

 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }