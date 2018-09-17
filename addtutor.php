<?php
 require 'init.php';
 $ttr_name = $_POST['ttr_name'];
 $ttr_dept = $_POST['ttr_dept'];
 $ttr_no = $_POST['ttr_no'];
 $date = date('Y-m-d');

 $query = $db->query("INSERT INTO tutors(name,department,matric,date)VALUES('$ttr_name','$ttr_dept','$ttr_no','$date')");
