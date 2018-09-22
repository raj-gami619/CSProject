<table class="table table-bordered table-hover project_table">
	<thead>
		<tr>
			<th>Unit Name</th>
			<th>Unit Code</th>
			<th>Faculty</th>
			<th>Unit Level</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM project");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
			   $project_name = $row->project_name;
			   $unit_code = $row->unit_code;
			   $faculty = $row->faculty;
               $project_level = $row->project_level;
        ?>
             <tr>
             	<td><?php echo $project_name; ?></td>
				<td><?php echo $unit_code; ?></td>
				<td><?php echo $faculty; ?></td>
             	<td><?php echo $project_level ?></td>
             	<td>
             	    <a class="btn btn-xs btn-primary" href="editproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete unit? ')" href="deleteproject.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>