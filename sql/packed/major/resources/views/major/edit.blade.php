@extends('layout/template-pricing')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_major as $row)
<h1>Edit major : {{ $row->id_major_auto }}</h1>
	<form action="{{ url('/') }}/major/{{ $row->id_major_auto }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>IdMajor : </strong>
			<input type="number" name="id_major_auto" value="{{ $row->id_major_auto }}" >
		</div>
		<div class="line">
			<strong>MajorName : </strong>
			<input type="text" name="major_name" value="{{ $row->major_name }}"  >
		</div>
		<div class="line">
			<strong>Idfaculty : </strong>
			<input type="number" name="id_faculty" value="{{ $row->id_faculty }}"  >
		</div>
		<div class="line">
			<a href="{{ url('/') }}/major">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This major id_major_auto does not exist</div>
@endforelse
@endsection