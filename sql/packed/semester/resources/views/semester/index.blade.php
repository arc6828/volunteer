@extends('template-pricing.blade.php')
<body>
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@section('content')

<h1>semester</h1>
<div class="line">
	<a href="{{ url('/') }}/semester/create">
New semester

</a>
</div>
<div class="line">
	<form class="inline" action="{{ url('/') }}/semester" method="GET">
		<input type="text" name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>

<table class="table">
<tr>
		<th>id_semester</th>
		<th>sem_Name</th>
	</tr>
	@foreach($table_semester as $row)
	<tr>
		<td>{{ $row->id_semester }} </td>
		<td>{{ $row->sem_name }} </td>
		<td>
			<a href="{{ url('/') }}/semester/{{ $row->id_semester }}">View</a>
			<a href="{{ url('/') }}/semester/{{ $row->id_semester }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>

</body>
</html>
@endsection
