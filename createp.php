<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Unit name</label>
				<input type="text" name="project_name" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Unit Code</label>
				<input type="text" name="unit_code" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Faculty</label>
				<input type="text" name="faculty" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Unit Level</label>
				<select name="project_level" class="form-control input-sm " required>
				  <option>Year 1</option>
				  <option>Year 2</option>
				  <option>Year 3</option>
				  <option>Year 4</option>
				</select>
			</div>

			<button type="submit" class="btn btn-sm btn-success">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<?php include 'all_project.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addproject.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Adding Unit Details Please Wait......", { sticky: true });
				$.jGrowl("Successfully added", { header: 'Success !!' });
				var delay = 1000;
					setTimeout(function(){ window.location = 'create-project.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating Unit", { header: 'Unit creation failed' });
			}
			}
		});
		return false;
	});
});
</script>