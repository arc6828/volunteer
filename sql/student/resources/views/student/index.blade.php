<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Student List</h1>
<div class="line">
<a href="{{ url('/') }}/student/create">New student</a>
</div>

<div class="line">
<form class="inline" action="{{ url('/') }}/student" method="GET">
<input type="text" name="q" placeholder="type your keyword..." value="{{ $q }}">
<button type="submit">Search</button>
</form>
</div>


<table border=1>
<tr>
<th>id</th>
<th>id_student</th>
<th>name</th>
<th>lastname</th>
<th>degree</th>
<th>major</th>
</tr>
@foreach($table_student as $row)
<tr>
<td>{{ $row->id_student_auto }} </td>
<td>{{ $row->id_student }} </td>
<td>{{ $row->stu_name }}</td>
<td>{{ $row->stu_lastname }}</td>
<td>{{ $row->degree }}</td>
<td>{{ $row->major }}</td>
</tr>
@endforeach
</table>