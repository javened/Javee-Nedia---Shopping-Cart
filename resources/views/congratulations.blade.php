<!DOCTYPE html>
<html>
<head>
	<title>congratulations</title>
</head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
    position: center;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

<body>
<center>
<h1>CONGRATULATIONS! you're already on the list!</h1>

    	<table border="1px solid black" style="width:60%; position: center;">
    		<tr>
    			<th>Firstname</th>
    			<th>Lastname</th>
    			<th>idNumber</th>
    			<th>Course</th>
    			<th>Address</th>
                <th></th>
                <th></th>
    		</tr>
            <tr>
            @foreach($student as $students)
            <td>{{ $students->first_name }}</td>
        <td>{{ $students->last_name }}</td>
        <td>{{ $students->id_number }}</td>
        <td>{{ $students->course }}</td>
        <td>{{ $students->address }}</td>
        <td>
        <form method="POST" action="/update">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$students->id}}">
        <input type="hidden" name="firstname" value="{{$students->first_name}}">
        <input type="hidden" name="lastname" value="{{$students->last_name}}">
        <input type="hidden" name="idNumber" value="{{$students->id_number}}">
        <input type="hidden" name="course" value="{{$students->course}}">
        <input type="hidden" name="address" value="{{$students->address}}">
        <button type="submit">Edit</button></td>
        </form>
        
        <td>
        <form method="POST" action="/delete">
        {{ csrf_field() }}
        <input type="hidden" name="firstname" value="{{$students->first_name}}">
        <input type="hidden" name="lastname" value="{{$students->last_name}}">
        <input type="hidden" name="idNumber" value="{{$students->id_number}}">
        <input type="hidden" name="course" value="{{$students->course}}">
        <input type="hidden" name="address" value="{{$students->address}}">
        <button type="submit">Delete</button>
        </form>
        </td>
        </tr>
    		@endforeach
    	</table> 
    	

    	
    
</center>
</body>
</html>