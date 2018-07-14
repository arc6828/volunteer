@extends('layout/template-pricing')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_activity as $row)
<center>
<h1>Edit Activity : {{ $row->id_activity }}</h1>
<form action="{{ url('/') }}/activity/{{ $row->id_activity }}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="line">
<strong>ActivityName : </strong>
<input type="text" name="activity_name" value="{{ $row->activity_name }}" >
</div>
<div class="line">
<strong>Date_start: </strong>
<input type="date" name="date_start" value="{{ $row->date_start }}" >
</div>
<div class="line">
<strong>Place : </strong>
<input type="text" name="place" value="{{ $row->place }}" >
</div>
<div class="line">
<strong>Max_hour : </strong>
<input type="number"  name="max_hour" value="{{ $row->max_hour }}" >
</div>
<div class="line">
<strong>Id_semester : </strong>
<input type="number" name="id_semester" value="{{ $row->id_semester }}" >
</div>
<div class="line">
<strong>Id_activity_type : </strong>
<input type="number" name="id_activity_type" value="{{ $row->id_activity_type }}" >
</div>
<div class="line">
<strong>Id_major : </strong>
<input type="number" name="id_major" value="{{ $row->id_major }}" >
</div>
<div class="line">
<a href="{{ url('/') }}/activity">back</a>
<button type="submit">Update</button>
</div>
</form>
</center>
@empty
<div>This Activity id does not exist</div>
@endforelse
@endsection 