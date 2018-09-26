@extends('monster-lite/layouts/theme')

@section('title','Faculty')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/faculty/create" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-plus"></i> New Faculty
</a>
@endsection

@section('content')

<div class="card">
    <div class="card-block">
    	<div class="row">
    		<div class="col-md-9 align-self-center">
		        <h4 class="card-title">Faculty Table</h4>
		        <h6 class="card-subtitle">Display all activities in the database</h6>
    		</div>
    		<div class="col-md-3 align-self-center">
				<form class="form-material" action="{{ url('/') }}/faculty" method="GET">
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
						<th>name</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($table_faculty as $row)
					<tr>
						<td>{{ $row->faculty_id }} </td>
						<td>
							<a href="{{ url('/') }}/faculty/{{ $row->faculty_id  }}/edit">
								{{ $row->faculty_name }}
							</a>
						</td>
						<td>
							<a href="javascript:void(0)" onclick="onDelete( {{ $row->faculty_id }} )" title="Delete">
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
			form.action = "{{ url('/') }}/faculty/"+id;
			//SUBMIT
			var want_to_delete = confirm('Are you sure to delete this faculty ?');
			if(want_to_delete){
				form.submit();
			}
		}
	</script>
</div>
@endsection
