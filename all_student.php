<table class="table table-bordered table-hover project_table">
	<thead>
		<tr>
			<th>Student Name</th>
			<th>Student Number</th>
			<th>Level</th>
			<th>Department</th>
      <th>Email</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM student");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
               $department = $row->department;
               $level = $row->level;
               $matric = $row->matric;
               $email = $row->email;
        ?>
             <tr>
             	<td><?php echo $name; ?></td>
             	<td><?php echo $matric; ?></td>
             	<td><?php echo $level ?></td>
              <td><?php echo $department ?></td>
              <td><?php echo $email; ?></td>
             	<td>
             	    <a class="btn btn-xs btn-primary" href="edit_std_data.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete? ')" href="delete_std_data.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>