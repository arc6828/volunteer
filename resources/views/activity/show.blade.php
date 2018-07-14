@extends('layout/template-pricing')
@section('content')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<center>
@forelse($table_activity as $row)
<h1>Activity : {{ $row->id_activity }} </h1>
<div class="line">
<strong>Activity_name : </strong>
<span>{{ $row->activity_name }} </span>
</div>
<div class="line">
<strong>Date_start : </strong>
<span>{{ $row->date_start }}</span>
</div>
<div class="line">
<strong>Place</strong>
<span>{{ $row->place }}</span>
</div>
<div class="line">
<strong>Max_hour</strong>
<span>{{ $row->max_hour }}</span>
</div>
<strong>Id_semester</strong>
<span>{{ $row->id_semester }}</span>
</div>
<strong>Id_activity_type</strong>
<span>{{ $row->id_activity_type }}</span>
</div>
<strong>Id_major</strong>
<span>{{ $row->id_major }}</span>
</div>
<div class="line">
<a href="{{ url('/') }}/activity">back</a>
<a href="{{ url('/') }}/activity/{{ $row->id_activity }}/edit">edit</a>
<form class="inline" action="{{ url('/') }}/activity/{{ $row->id_activity }}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit">Delete</button>
</form>
</div>
@empty
<div>This Activity id does not exist</div>
</center>
@endforelse
@endsection 