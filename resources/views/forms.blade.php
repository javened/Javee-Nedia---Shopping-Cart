<!DOCTYPE html>
<html>
<head>
	<title>student forms</title>
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 80px;
}
</style>
<body>
     <center>
         <h1>Students Form</h1>
	     <form action="/insert" method="post">
   <div>
		{{csrf_field()}}
  
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="first_name">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last_name">

    <label for="idNumber">Id Number</label>
    <input type="text" id="idNumber" name="id_number">

    <label for="course">Course</label>
    <select id="course" name="course">
      <option value="Bs Information System">Bs information System</option>
      <option value="AB brodcasting">AB brodcasting</option>
      <option value="Associate in ComputerTech">Associate in ComputerTech</option>
      <option value="Office Management">Office Management</option>
      <option value="International cookery">International cookery</option>
      <option value="Nursing assistant">Nursing assistant</option>
      <option value="Bs Accountancy">Bs Accountancy</option>
      <option value="Bs AccountancyTechnology">Bs AccountancyTechnology</option>
    </select>

    <label for="address">Address</label>
    <input type="text" id="address" name="address">
  
    <input type="submit" value="Submit">
  </form>
</div>
	     </form>
    </center>
    <br><br><br>
    
    </br></br></br>
</body>
</html>