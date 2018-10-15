<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Student Name</label>
				<input type="text" name="std_name" value="<?php echo $name ?>" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Student Reg. No</label>
				<input type="text" name="std_no" value="<?php echo $matric; ?>" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Department</label>
				<input type="text" name="std_dept" value="<?php echo $department; ?>" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Class</label>
				<select name="std_class" class="form-control input-sm " required>
				  <option value="<?php echo $level; ?>" selected><?php echo $level; ?></option>
				  <option value="Year 1.1">Year 1, Semester 1</option>
				  <option value="Year 1.2">Year 1, Semester 2</option>
				  <option value="Year 2.1">Year 2, Semester 1</option>
				  <option value="Year 2.2">Year 2, Semester 2</option>
				  <option value="Year 3.1">Year 3, Semester 1</option>
				  <option value="Year 3.2">Year 3, Semester 2</option>
				  <option value="Year 4.1">Year 4, Semester 1</option>
				  <option value="Year 4.2">Year 4, Semester 2</option>
				</select>
			</div>
            <input type="hidden" name="std_id" value="<?php echo $id; ?>">
			<button type="submit" class="btn btn-sm btn-success">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<?php include 'all_student.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "updatestudent.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Student successfully updated", { header: 'Success !!' });
				var delay = 1000;
					setTimeout(function(){ window.location = 'create-student.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating item", { header: 'Creation failed' });
			}
			}
		});
		return false;
	});
});
</script>