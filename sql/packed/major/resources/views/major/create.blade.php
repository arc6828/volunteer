@extends('layout/template-pricing')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New major</h1>
<form action="{{ url('/') }}/major" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<hr>
	<div class="line">
		<strong>IdMajor : </strong>
		<input type="number" name="id_major_auto" placeholder="Id majorname here..." >
	</div>
	<div class="line">
		<strong>MajorName : </strong>
		<input type="text" name="major_name" placeholder="majorname here..." >
	</div>
	<div class="line">
		<strong>Idfaculty : </strong>
		<input type="number" step="any" name="id_faculty" placeholder="Idfaculty here..." >
	</div>
	</hr>
	<div class="line">
		<a href="{{ url('/') }}/major">back</a>
		<button type="submit">Create</button>
	</div>

</form>
@endsection