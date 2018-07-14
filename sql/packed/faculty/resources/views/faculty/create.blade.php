@extends('layout/template-pricing') 
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@section('content') 
<form action="{{ url('/') }}/faculty" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>name : </strong>
		<input type="text" name="name" placeholder="name here..." >
	</div>
	<div class="line">
		<button><a href="{{ url('/') }}/faculty">back</a></button>
		<button type="submit">Create</button>
	</div>
</form>
 @endsection 