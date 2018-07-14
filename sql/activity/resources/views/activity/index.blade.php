@extends('layout/template-pricing')
@section('content') 
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<center>
<h1>Activity List</h1>
<br>
<div class="line">
<a class ="button_create" href="{{ url('/') }}/activity/create">
New Activity 
</a>
</div>
<br>
<div class="line">
<form class="inline" action="{{ url('/') }}/activity" method="GET">
<input type="text" name="q" placeholder="type your keyword..." value="{{ $q }}">
<button type="submit">Search</button>
</form>
</div>
<br>
<table border=1 >
<tr>
<th>id_activity</th>
<th>activity_name</th>
<th>date_start</th>
<th>place</th>
<th>max_hour</th>
<th>id_semester</th>
<th>id_activity_type</th>
<th>major</th>
<th>action</th>
</tr>
@foreach($table_activity as $row)
<tr>
<td>{{ $row->id_activity }} </td>
<td>{{ $row->activity_name }} </td>
<td>{{ $row->date_start }}</td>
<td>{{ $row->place }}</td>
<td>{{ $row->max_hour }}</td>
<td>{{ $row->id_semester }}</td>
<td>{{ $row->id_activity_type }}</td>
<td>{{ $row->id_major }}</td>
<td>
<a href="{{ url('/') }}/activity/{{ $row->id_activity }}">View</a>
<a href="{{ url('/') }}/activity/{{ $row->id_activity }}/edit">Edit</a>
</td>
</tr>
@endforeach
</table>
</center>
<br>

@endsection