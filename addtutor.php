<?php
 require 'init.php';
 $ttr_name = $_POST['ttr_name'];
 $ttr_dept = $_POST['ttr_dept'];
 $ttr_no = $_POST['ttr_no'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $date = date('Y-m-d');

 $query = $db->query("INSERT INTO tutors(name,department,matric,date,email,password)VALUES('$ttr_name','$ttr_dept','$ttr_no','$date','$email','$password')");

 if($query){
    $update = $db->query("UPDATE tutors SET allocation = 1 WHERE id = '$id' ");
    echo 'true';

}else{
    echo 'false';
}