<?php require '../common/init.php'; ?>
<?php include '../common/head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];

    $query = $db->query("SELECT * FROM project WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $r){
      $project_name = $r->project_name;
      $unit_code = $r->unit_code;
			$faculty = $r->faculty;
      $project_level = $r->project_level;
    }
}else{
	header('location: create-project.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Edit Unit(s)</h3>
<?php include 'edit-form.php'; ?>
<?php include '../common/footer.php'; ?>
