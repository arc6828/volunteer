@extends('layout/template-pricing')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Activity</h1>
<form action="{{ url('/') }}/activity" method="POST">
{{ csrf_field() }}
{{ method_field('POST') }}
<div class="line">
<strong>ActivityName : </strong>
<input type="text" name="activity_name"  >
</div>
<div class="line">
<strong>DateStart: </strong>
<input type="date" name="date_start">
</div>
<div class="line">
<strong>Place : </strong>
<input type="text" name="place" >
</div>
<div class="line">
<strong>Max_hour : </strong>
<input type="number" name="max_hour">
</div>
<div class="line">
<strong>Id_semester : </strong>
<input type="number" name="id_semester">
</div>
<div class="line">
<strong>Id_activity_type : </strong>
<input type="number" name="id_activity_type">
</div>
<div class="line">
<strong>Id_major : </strong>
<input type="number" name="id_major">
</div>
<div class="line">
<a class = "button_back" href="{{ url('/') }}/activity">back</a>
<button type="submit" >Create</button>
</div>
</form>
@endsection 