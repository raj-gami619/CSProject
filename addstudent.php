<?php
 require 'init.php';
 $std_name = $_POST['std_name'];
 $std_dept = $_POST['std_dept'];
 $std_no = $_POST['std_no'];
 $std_class = $_POST['std_class'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $date = date('Y-m-d');

 $query = $db->query("INSERT INTO student(name,department,level,matric,date,email,password)VALUES('$std_name','$std_dept','$std_class','$std_no','$date','$email','$password')");