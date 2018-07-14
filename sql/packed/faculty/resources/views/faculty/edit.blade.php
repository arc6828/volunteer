@extends('layout/template-pricing') 
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@section('content') 

@forelse($table_faculty as $row)
<h1>Edit faculty : {{ $row->id_faculty_auto}}</h1>
	<form action="{{ url('/') }}/faculty/{{ $row->id_faculty_auto }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="line">
			<strong>name : </strong>
			<input type="text" name="name" value="{{ $row->name }}"  >
		</div>
		<div class="line">
			<button><a href="{{ url('/') }}/faculty">back</a></button>
			<button type="submit">Update</button>
		</div>
	</form>

@empty	
	<div>This faculty id does not exist</div>
@endforelse
 @endsection 
