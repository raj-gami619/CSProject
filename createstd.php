<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Student Name</label>
				<input type="text" name="std_name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Student Reg. No</label>
				<input type="text" name="std_no" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Department</label>
				<input type="text" name="std_dept" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Class</label>
				<select name="std_class" class="form-control input-sm " required>
				  <option value="lo1">Year 1, Semester 1</option>
				  <option value="lo2">Year 1, Semester 2</option>
				  <option value="lo3">Year 2, Semester 1</option>
				  <option value="lo4">Year 2, Semester 2</option>
				  <option value="hi1">Year 3, Semester 1</option>
				  <option value="hi2">Year 3, Semester 2</option>
				  <option value="hi3">Year 4, Semester 1</option>
				  <option value="hi4">Year 4, Semester 2</option>
				</select>
			</div>

			<div class="form-group">
				
			</div>

			<button type="submit" class="btn btn-sm btn-default">Submit</button>
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
			url: "addstudent.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Student successfully added & assigned", { header: 'Success !!' });
				var delay = 5000;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating project", { header: 'Project creation failed' });
			}
			}
		});
		return false;
	});
});
</script>
<script>
   $(document).ready(function(){
   	  $("#login_form1 .well").on('mouseover',function(){
        $.ajax({
        	type: 'POST',
        	url: 'assign.php',
        	data: 'action=yes',
        	cache: false,
        	dataType: 'json',
        	success: function(data){
              setTimeout(function(){
              	var project = data[0]['project_name'];
              	var case_ = data[0]['project_case'];
              	var id = data[0]['id'];
                
                $("#project_title").html("");
                $("#project_title").append(project+"<br>"+case_);
                $("#project_id").val(id);
              },500);
        	}
        })
   	  })
   })
</script>