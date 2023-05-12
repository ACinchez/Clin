<!DOCTYPE html>
<html>
<head>
<title>Patient Management | Add</title>
</head>
<body>

<center>
<form action = "/create" method = "post">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	
	
	
	<label>First Name:</label>
	<input type='text' name='firstname'  required/>
	<br>
	
	<label>Last Name:</label>
	<input type='text' name='lastname'  required/>
		<br>

		
	<label>Email:</label>
	<input type='text' name='email'  required/>
		<br>


	<label>Middle Name:</label>
	<input type='text' name='middlename'  required/>
	<br>


	<label>Address:</label>
	<input type='text' name='address'  required/>


	<br>
	<label>birthday:</label>
	<input type='text' name='birthday'  required/>
	<br>

	<label>Gender:</label>
	<select name="gender" id="gender">
	<option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
<br>

<label>Age</label>
<input type="text" name="age" required/>
<br>


<label>Course and Year</label>
<input type="text" name="course_year" required/>
<br>

	
<label>Religion</label>
<input type="text" name="religion" required/>
<br>
	

	<input type = 'submit' value = "Add Patient"/>

</form>
</center>
</body>
</html>
