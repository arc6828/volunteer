@extends('monster-lite/layouts/theme')

@section('title','Create a new semester')

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

    			<form class="form-material" action="{{ url('/') }}/semester" method="POST">
					{{ csrf_field() }}
					{{ method_field('POST') }}
					<div class="form-group">
	                    <label class="col-md-12">ปีการศึกษา</label>
	                    <div class="col-md-12">
							<select name="semester_year" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_semester_year as $row_semester_year)
								<option value="{{ $row_semester_year }}" >
									{{ $row_semester_year }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">ภาคเรียนที่</label>
	                    <div class="col-md-12">
							<select name="semester_no" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_semester_no as $row_semester_no)
								<option value="{{ $row_semester_no }}" >
									{{ $row_semester_no }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">ภาค</label>
	                    <div class="col-md-12">
							<select name="semester_type" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_semester_type as $row_semester_type)
								<option value="{{ $row_semester_type }}" >
									{{ $row_semester_type }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
	                <div class="form-group">
                        <div class="col-sm-12">
                        	<div class="pull-right">
								<a class="btn btn-outline-primary" href="{{ url('/') }}/semester">back</a>
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
