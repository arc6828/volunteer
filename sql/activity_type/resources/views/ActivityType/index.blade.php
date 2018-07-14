<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<!doctype html>
<h1>Customer List</h1>
<div class="line">
<a href="{{ url('/') }}/activity_type/create">New activity_type</a>
</div>
<div class="line">
<form class="inline" action="{{ url('/') }}/activity_type" method="GET">
<input type="text" name="q" placeholder="type your keyword..." value="{{ $q }}">
<button type="submit">Search</button>
</form>
</div>
<table border=1>
<tr>
<th>id</th>
<th>name</th>
<th>age</th>
<th>address</th>
<th>salary</th>
<th>action</th>
</tr>
@foreach($table_ActivityType as $row)
<tr>
<td>{{ $row->id }} </td>
<td>{{ $row->name }} </td>
<td>{{ $row->age }}</td>
<td>{{ $row->address }}</td>
<td>{{ $row->salary }}</td>
<td>
<a href="{{ url('/') }}/activity_type/{{ $row->id }}">View</a>
<a href="{{ url('/') }}/activity_type/{{ $row->id }}/edit">Edit</a>
</td>
</tr>
@endforeach
</table>