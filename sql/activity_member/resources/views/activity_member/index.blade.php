@extends('layout/template-pricing') 
@section('content')
<link href="{{ url('/') }}/css/style.css" rel="stylesheet" type="text/css">

<div class="line">
	<h2> ข้อมูลการทำจิตอาสา</h2>
	<a href="{{ url('/') }}/activity_member/create">เพิ่มข้อมูล</a>
</div>
<div class="line">
	<form class="inline" action="{{ url('/') }}/activity_member" method="GET">
		<input type="number" name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>

<table border=1>
<tr>
		<th>รหัส activity_member</th>
		<th>รหัส student</th>
		<th>หัส activity</th>
		<th>ชั่วโมงที่ทำกิจกรรม</th>
		<th>action</th>
	</tr>
	@foreach($table_activity_member as $row)
	<tr>
		<td>{{ $row->id_act_mem_auto }} </td>
		<td>{{ $row->id_student }} </td>
		<td>{{ $row->id_activity }}</td>
		<td>{{ $row->hour }}</td>
		<td>
			<a href="{{ url('/') }}/activity_member/{{ $row->id_act_mem_auto }}">View</a>
			<a href="{{ url('/') }}/activity_member/{{ $row->id_act_mem_auto }}/edit">Edit</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection
