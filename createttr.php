<div class="row">
	<div class="col-md-4">
		<form method="post" action="" id="login_form1">
			<div class="form-group">
				<label class="control-label">Tutors' Name</label>
				<input type="text" name="ttr_name" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Tutors' Reg. No</label>
				<input type="text" name="ttr_no" class="form-control input-sm" required>
			</div>

			<div class="form-group">
				<label class="control-label">Department</label>
				<input type="text" name="ttr_dept" class="form-control input-sm" required>
			</div>
			<div class="form-group">
				
			</div>

			<button type="submit" class="btn btn-sm btn-default">Submit</button>
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

				$.jGrowl("Please Wait......", { sticky: true });
				$.jGrowl("Tutor successfully added", { header: 'Success !!' });
				var delay = 500;
					setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
			}else
			{
			    $.jGrowl("Error creating tutors detail(s)!", { header: ' Creation failed' });
			}
			}
		});
		return false;
	});
});
</script>
<!-- <script>
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
</script> -->