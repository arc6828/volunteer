@extends('layout/template-pricing')  
<!DOCTYPE html>
@section('content')  
<html>
<head>
	<title></title>
</head>
<body>
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<div class="line">
	<a href="{{ url('/') }}/faculty/create">
New faculty
</a>
</div>
<div class="line">
	<form class="inline" action="{{ url('/') }}/faculty" method="GET">
		<input type="text" name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>

<table border=1 class="table">
<tr>
		<th>id</th>
		<th>name</th>
	</tr>
	
	@foreach($table_faculty as $row)
	<tr>
		<td>{{ $row->id_faculty_auto }} </td>
		<td>{{ $row->name }} </td>		
<td>
			<a href="{{ url('/') }}/faculty/{{ $row->id_faculty_auto  }}">View</a>
			<a href="{{ url('/') }}/faculty/{{ $row->id_faculty_auto  }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>

</body>
</html>
 @endsection 