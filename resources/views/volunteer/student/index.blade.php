@extends('monster-lite/layouts/theme')

@section('title','Student')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/student/create" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-plus"></i> New Student
</a>
@endsection

@section('content')

<div class="card">
    <div class="card-block">
    	<div class="row">
    		<div class="col-md-9 align-self-center">
		        <h4 class="card-title">Student Table</h4>
		        <h6 class="card-subtitle">Display all students in the database</h6>
    		</div>
    		<div class="col-md-3 align-self-center">
				<form class="form-material" action="{{ url('/') }}/activity" method="GET">
					<input class="form-control form-control-line" type="text" name="q" placeholder="Search ..." value="{{ $q }}">
					<button class="hide btn btn-success" type="submit">Search</button>
				</form>
    		</div>
    	</div>

		<div class="table-responsive">
			<table class="table table-hover text-center">
				<thead class="thead-dark">
					<tr>
						<th>id</th>
						<th>student_id</th>
						<th>name</th>
						<th>degree</th>
						<th>major</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($table_student as $row)
					<tr>
						<td>{{ $row->serial }} </td>
						<td>{{ $row->student_id }} </td>
						<td>
							<a href="{{ url('/') }}/student/{{ $row->serial }}/edit">
								{{ $row->student_name }}
							</a>
						</td>
						<td>{{ $row->degree }}</td>
						<td>{{ $row->major_id }}</td>
						<td>
							<a href="javascript:void(0)" onclick="onDelete( {{ $row->serial }} )" title="Delete">
								<i class="fa fa-trash text-danger"></i>
							</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div style="display:none;">
	<form action="#" method="POST" id="form_delete" >
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
	<script>
		function onDelete(id){
			//--THIS FUNCTION IS USED FOR SUBMIT FORM BY script--//

			//GET FORM BY ID
			var form = document.getElementById("form_delete");
			//CHANGE ACTION TO SPECIFY ID
			form.action = "{{ url('/') }}/student/"+id;
			//SUBMIT
			var want_to_delete = confirm('Are you sure to delete this faculty ?');
			if(want_to_delete){
				form.submit();
			}
		}
	</script>
</div>
@endsection
