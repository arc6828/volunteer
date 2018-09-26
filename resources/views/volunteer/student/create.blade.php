@extends('monster-lite/layouts/theme')

@section('title','Create a new student')

@section('breadcrumb-menu')

@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-block">
		    	<div class="row">
		    		<div class="col-md-9 align-self-center">
				        <h4 class="card-title">A new item</h4>
				        <h6 class="card-subtitle">Fill a new item in the form and then create</h6>
		    		</div>
		    		<div class="col-md-3 align-self-center">

		    		</div>
		    	</div>

    			<form class="form-material" action="{{ url('/') }}/student" method="POST">
					{{ csrf_field() }}
					{{ method_field('POST') }}
					<div class="form-group">
	                    <label class="col-md-12">student_id</label>
	                    <div class="col-md-12">
							<input type="number" name="student_id" class="form-control form-control-line">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">student_name</label>
	                    <div class="col-md-12">
							<input type="text" name="student_name" class="form-control form-control-line">
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">degree</label>
	                    <div class="col-md-12">
							<select name="degree" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_degree as $row_degree)
								<option value="{{ $row_degree }}" >
									{{ $row_degree }}
								</option>
								@endforeach
							</select>
						</div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">major_id</label>
	                    <div class="col-md-12">
							<select name="major_id" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_major as $row_major)
								<option value="{{ $row_major->major_id }}" >
									{{ $row_major->major_name }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
	                <div class="form-group">
                        <div class="col-sm-12">
                        	<div class="pull-right">
								<a class="btn btn-outline-primary" href="{{ url('/') }}/student">back</a>
								<button class="btn btn-success" type="submit" >Create</button>
                        	</div>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
