@extends('monster-lite/layouts/theme')

@section('title','Activity Member')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/activity/{{ $activity_id }}/member/create" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-plus"></i> New Activity Member
</a>
@endsection

@section('content')
<div class="card">
    <div class="card-block">
    	<div class="row">
    		<div class="col-md-9 align-self-center">
		        <h4 class="card-title">Activity Table</h4>
		        <h6 class="card-subtitle">Display all activities in the database</h6>
    		</div>
    		<div class="col-md-3 align-self-center">
				<form class="form-material" action="{{ url('/') }}/activity-member" method="GET">
					<input class="form-control form-control-line" type="text" name="q" placeholder="Search ..." value="{{ $q }}">
					<button class="hide btn btn-success" type="submit">Search</button>
				</form>
    		</div>
    	</div>

		<div class="table-responsive">
			<table class="table table-hover text-center">
				<thead class="thead-dark">
					<tr>
						<th>#</th>
						<th>รหัสนักศึกษา</th>
						<th>ชื่อ-สกุล</th>
						<th>กิจกรรม</th>
						<th>ชั่วโมงที่ทำกิจกรรม</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($table_activity_member as $row)
					<tr>
						<td>{{ $row->activity_member_id }} </td>
						<td>{{ $row->student_id }} </td>
						<td>{{ $row->student_name }} </td>
						<td>{{ $row->activity_name }}</td>
						<td>{{ $row->duration_hour }}</td>
						<td>
							<a href="{{ url('/') }}/activity/{{ $row->activity_id }}/member/{{ $row->activity_member_id }}/edit">
								<i class="fa fa-edit"></i> Edit
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div  class="hide" style="position : fixed; bottom:70px; right:30px;">
	<a href="{{ url('/') }}/activity/create" class="btn btn-circle pull-right btn-success btn-lg">
		<i class="fa fa-plus"></i>
	</a>
</div>

@endsection
