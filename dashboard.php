<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Recent Additions</h3>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover project_table">
		<thead>
			<tr>
				<th>Unit Name</th>
				<th>Unit Code</th>
				<th>Faculty</th>
				<th>Unit_Level</th>
			</tr>
		</thead>
		<tbody>
			<?php
             $query = $db->query("SELECT * FROM project");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $project_name = $row->name;
               $unit_code = $row->unit_code;
			   $faculty = $row->faculty;
			   $project_level = $row->project_level;
               $id = $row->id;
               $run = $db->query("SELECT project_name, FROM project WHERE unit_code = '$unit_code'");
               $run_rows = $run->fetchAll(PDO::FETCH_OBJ);
               foreach($run_rows as $runrow){
                //   $case = $runrow->project_case;
                  $title = $runrow->project_name;
               ?>
               <tr>
               	<td><?php echo $unit_code; ?></td>
               	<td><?php echo $name; ?></td>
               	<td class="text-bold"><?php echo $title; ?></td>
               	<td><?php echo $project_level; ?></td>
               	<td><?php echo $faculty; ?></td>
               </tr>
               <?php
               }
             }
			?>
		</tbody>
	</table>
</div>

<?php include 'footer.php'; ?>