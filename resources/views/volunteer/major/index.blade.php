@extends('monster-lite/layouts/theme')

@section('title','Major')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/major/create" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-plus"></i> New Major
</a>
@endsection

@section('content')

<div class="card">
    <div class="card-block">
    	<div class="row">
    		<div class="col-md-9 align-self-center">
		        <h4 class="card-title">Major Table</h4>
		        <h6 class="card-subtitle">Display all activities in the database</h6>
    		</div>
    		<div class="col-md-3 align-self-center">
				<form class="form-material" action="{{ url('/') }}/major" method="GET">
					<input class="form-control form-control-line" type="text" name="q" placeholder="Search ..." value="{{ $q }}">
					<button class="hide btn btn-success" type="submit">Search</button>
				</form>
    		</div>
    	</div>

		<div class="table-responsive">
			<table class="table table-hover text-center">
				<thead class="thead-dark">
					<tr>
						<th>major_id</th>
						<th>major_name</th>
						<th>faculty_name</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($table_major as $row)
					<tr>
						<td>{{ $row->major_id }} </td>
						<td>
							<a href="{{ url('/') }}/major/{{ $row->major_id }}/edit">
								{{ $row->major_name }}
							</a>
						</td>
						<td>{{ $row->faculty_name }}</td>
						<td>
							<a href="javascript:void(0)" onclick="onDelete( {{ $row->major_id }} )" title="Delete">
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
			form.action = "{{ url('/') }}/major/"+id;
			//SUBMIT
			var want_to_delete = confirm('Are you sure to delete this faculty ?');
			if(want_to_delete){
				form.submit();
			}
		}
	</script>
</div>
@endsection
