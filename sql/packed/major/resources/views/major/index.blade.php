@extends('layout/template-pricing')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Major </h1>
<div class="line">
	<a href="{{ url('/') }}/major/create">
New Major
</a>
</div>
<div class="line">
	<form class="inline" action="{{ url('/') }}/major" method="GET">
		<input type="text" name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>

<table border=1>
<tr>
		<th>id_major_auto</th>
		<th>major_name</th>
		<th>id_faculty</th>
		<th>menu</th>
	</tr>
	@foreach($table_major as $row)
	<tr>
		<td>{{ $row->id_major_auto }} </td>
		<td>{{ $row->major_name }} </td>
		<td>{{ $row->id_faculty }}</td>
		<td>
			<a href="{{ url('/') }}/major/{{ $row->id_major_auto }}">View</a>
			<a href="{{ url('/') }}/major/{{ $row->id_major_auto }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection