@extends('layout/template-pricing') 
@section('content')
<link href="{{ url('/') }}/css/style.css" rel="stylesheet" type="text/css">
<h1>เพิ่มข้อมูล</h1>
<form action="{{ url('/') }}/activity_member" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div class="line">
		<strong>รหัส student : </strong>
		<input type="number" name="id_student" placeholder="ใส่หัส student" >
	</div>
	<div class="line">
		<strong>รหัส activity : </strong>
		<input type="number" name="id_activity" placeholder="ใส่รหัส activity" >
	</div>
	<div class="line">
		<strong>ชั่วโมงที่ทำกิจกรรม : </strong>
		<input type="number" name="hour" placeholder="ใส่ชั่วโมงที่ทำกิจกรรม" >
	</div>
	<div class="line">
		<button><a href="{{ url('/') }}/activity_member">back</a></button>
		<button type="submit">Create</button>
	</div>
</form>
@endsection