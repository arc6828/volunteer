@extends('template-pricing.blade.php')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@section('content')

<h1>Create New semester</h1>
<form action="{{ url('/') }}/semester" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>sem_Name : </strong>
		<input type="text" name="sem_name" placeholder="semester Name here..." >
	</div>
	<div class="line">
		<a href="{{ url('/') }}/semester">back</a>
		<button type="submit">Create</button>
	</div>
 
</form>
<style>
@endsection  
