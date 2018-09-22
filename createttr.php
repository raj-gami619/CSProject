<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Name</label>
				<input type="text" name="ttr_name" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Number</label>
				<input type="text" name="ttr_no" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Department</label>
				<input type="text" name="ttr_dept" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Email</label>
				<input type="email" name="email" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label class="control-label">Password</label>
				<input type="password" name="password" class="form-control input-sm" autocomplete="off" required>
			</div>
			<div class="form-group">
				
			</div>
			<button type="submit" class="btn btn-sm btn-success">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<?php include 'all_tutors.php'; ?>
	</div>
</div>
<script>
$(document).ready(function(){
$("#login_form1").submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "addtutor.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait...", { sticky: true });
				$.jGrowl("Tutor details successfully added", { header: 'Success !!' });
				var delay = 1000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating tutors' detail(s)!", { header: ' Creation failed' });
			}
			}
		});
		return false;
	});
});
</script>