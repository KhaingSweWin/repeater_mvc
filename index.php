<html>
	<head>
		<title>Schedule</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			
			<div class="form-group">
				<form name="add_schedule" id="add_schedule">
                <table class="table">
                <tr><td>
					<div class="table-responsive">
						<div id="schedule">
							<div class="form-row">
                                <div class="form-group col-md-3"><input type="text" name="day[]" placeholder="Enter Day" class="form-control day_list" /></div>
								<div class="form-group col-md-3"><input type="text" name="start_time[]" placeholder="Starting Time" class="form-control stime_list" /></div>
								<div class="form-group col-md-3"><input type="text" name="end_time[]" placeholder="End Time" class="form-control etime_list" /></div>
								<div class="form-group col-md-3"><button type="button" name="add" id="add" class="btn btn-success">Add More</button></div>
							<div>
						</div>
						
					</div>
                </td></tr>
                <tr><td>  
                    <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                 </td></tr>   
                   
				</form>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#schedule').append('<div class="form-row" id="row'+i+'"> <div class="form-group col-md-3"><input type="text" name="day[]" placeholder="Enter day" class="form-control day_list" /></div> <div class="form-group col-md-3"><input type="text" name="start_time[]" placeholder="StartingTime" class="form-control stime_list" /></div> <div class="form-group col-md-3"><input type="text" name="end_time[]" placeholder="End Time" class="form-control etime_list" /></div> <div class="form-group col-md-3"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div>');
		
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"schedule.php",
			method:"POST",
			data:$('#add_schedule').serialize(),
			success:function(data)
			{
				alert("Successfully Added");
				$('#add_schedule')[0].reset();
                $('#add_schedule')[1].reset();
                $('#add_schedule')[2].reset();
				
				
			}
		});
	});
	
});
</script>




