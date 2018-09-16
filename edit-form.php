<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Unit Name</label>
				<input type="text" name="project_name" value="<?php echo $project_name; ?>" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				<label class="control-label">Level</label>
				<select name="project_level" class="form-control input-sm " required>
				  <option value="<?php echo $project_level; ?>" selected><?php echo $project_level; ?></option>
				  <option value="Year 1">Year 1</option>
				  <option value="Year 2">Year 2</option>
				  <option value="Year 3">Year 3</option>
				  <option value="Year 4">Year 4</option>
				</select>
			</div>
            <input type="hidden" name="project_id" value="<?php echo $_GET['id']; ?>">
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
			url: "updateproject.php",
			data: formData,
			success: function(html){
				alert(html);
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Successfully added", { header: 'Success !!' });
				var delay = 500;
					setTimeout(function(){ window.location = 'create-project.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error updating unit", { header: 'Unit update failed' });
			}
			}
		});
		return false;
	});
});
</script>