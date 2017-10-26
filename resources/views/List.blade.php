<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>
	@foreach($unique as $uniques)
	{{$uniques->Name}}<br>
	{{$uniques->Age}}<br>
	{{$uniques->Course}}<br>
	{{$uniques->StudentNmber}}
	{{$uniques->Email}}
	@endforeach
</body>
</html>