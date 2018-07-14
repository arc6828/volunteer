@extends('layout/template-pricing') 
@section('content')
<link href="{{ url('/') }}/css/style.css" rel="stylesheet" type="text/css">
@forelse($table_activity_member as $row)
<h1>แก้ไขข้อมูล : {{ $row->id_act_mem_auto }}</h1>
	<form action="{{ url('/') }}/activity_member/{{ $row->id_act_mem_auto }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>รหัส student : </strong>
			<input type="text" name="id_student" value="{{ $row->id_student }}" >
		</div>
		<div class="line">
			<strong>รหัส activity : </strong>
			<input type="text" name="id_activity" value="{{ $row->id_activity }}"  >
		</div>
		<div class="line">
			<strong>ชั่วโมงที่ทำกิจกรรม : </strong>
			<input type="text" name="hour" value="{{ $row->hour }}"  >
		</div>
		<div class="line">
			<button><a href="{{ url('/') }}/activity_member">back</a></button>
			<button type="submit">Update</button>
		</div>
	</form>
@empty	
	<div>This ..... id does not exist</div>
@endforelse

@endsection