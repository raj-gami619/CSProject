<table class="table table-bordered table-hover project_table">
	<thead>
		<tr>
			<th>Tutors' Name</th>
			<th>Tutors' Number</th>
			<th>Department</th>
      <th>Email</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php
           $query = $db->query("SELECT * FROM tutors");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
							 $department = $row->department;
							 $matric = $row->matric;
               $email = $row->email;
        ?>
             <tr>
             	<td><?php echo $name; ?></td>
							 <td><?php echo $matric; ?></td>
              <td><?php echo $department ?></td>
              <td><?php echo $email; ?></td>
             	<td>
             	    <a class="btn btn-xs btn-primary" href="edit_ttr_data.php?id=<?php echo $row->id; ?>"><i class="fa fa-edit"></i></a>
             		  <a class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete? ')" href="delete_ttr_data.php?id=<?php echo $row->id; ?>"><i class="fa fa-trash"></i></a>
             	</td>
             </tr>
        <?php
           }
		?>
	</tbody>
</table>