<!DOCTYPE html>
<html>
<head>
	<title>Form Registration</title>
</head>
<body>

	<h1>Form Registration</h1>
	<form method="post" action = "/listahan">
		{{csrf_field()}}
		Name: <input type="text" name="Name"><br>
		Age: <input type="number" name="Age"><br>
		Course: <input type="text" name="Course"><br>
		Student No:<input type="number" name="StudentNumber"><br>
		Email: <input type="text" name="Email"><br>
		<input type="submit" value="Submit">
	</form>


</body>
</html>