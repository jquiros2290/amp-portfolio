<!DOCTYPE html>
<html>
<head>
	<title>Add a project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div>
		<h3>Add a project</h3>
	</div>
	<form action="{{route('projects')}}" method="post">
		@csrf
		<div class="form-group">
			<input type="text" name="name" placeholder="Name" required>
		</div>
		<div class="form-group">
		<textarea type="text" name="description" placeholder="Description" required></textarea>
		</div>
		<div class="form-group">
		<input type="text" name="link" placeholder="Link" required>	
		</div>
		<div class="form-group">
		<input type="text" name="narrow_img" placeholder="Mobile IMG" required>
		</div>
		<div class="form-group">
		<input type="text" name="wide_img" placeholder="Desktop IMG" required>
		</div>
		<div class="form-group">
		<input type="text" name="button" placeholder="Button Name" required>
		</div>
		<div class="form-group">
		<input type="submit" name="submit" placeholder="Submit" required>
		</div>
	</form>
</div>

</body>
</html>