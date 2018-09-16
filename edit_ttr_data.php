<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM tutors WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $r){
      $name = $r->name;
      $department = $r->department;
      $matric = $r->matric;
      $id = $r->id;
    }
}else{
	header('location: create-project.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Edit Tutors' Details</h3>
<?php include 'edit_ttr_form.php'; ?>
<?php include 'footer.php'; ?>