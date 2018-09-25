@extends('monster-lite/layouts/theme')

@section('title','Create a new activity')

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

    			<form class="form-material" action="{{ url('/') }}/activity" method="POST">
					{{ csrf_field() }}
					{{ method_field('POST') }}
					<div class="form-group">
	                    <label class="col-md-12">ActivityName : </label>
	                    <div class="col-md-12">
							<input type="text" name="activity_name" class="form-control form-control-line"  >
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Date Begin : </label>
	                    <div class="col-md-12">
							<input type="date" name="date_begin" class="form-control form-control-line"   >
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Date End : </label>
	                    <div class="col-md-12">
							<input type="date" name="date_end" class="form-control form-control-line"   >
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Time Begin : </label>
	                    <div class="col-md-12">
							<input type="time" name="time_begin" class="form-control form-control-line"   >
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Time End : </label>
	                    <div class="col-md-12">
							<input type="time" name="time_end" class="form-control form-control-line"   >
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Place : </label>
	                    <div class="col-md-12">
							<input type="text" name="place" class="form-control form-control-line"  >
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Duration Hour : </label>
	                    <div class="col-md-12">
							<input type="number" name="duration_hour"  class="form-control form-control-line"   >
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Semester ID : </label>
	                    <div class="col-md-12">
							<select name="semester_id" class="form-control">
								@foreach($table_semester as $row_semester)
								<option value="{{ $row_semester->semester_id }}" >
									{{ $row_semester->semester_year }} / {{ $row_semester->semester_no }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Activity Type ID : </label>
	                    <div class="col-md-12">
							<select name="activity_type_id" class="form-control">
								@foreach($table_activity_type as $row_activity_type)
								<option value="{{ $row_activity_type->activity_type_id }}" >
									{{ $row_activity_type->activity_type_name }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Major ID : </label>
	                    <div class="col-md-12">
							<select name="major_id" class="form-control">
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
								<a class="btn btn-outline-primary" href="{{ url('/') }}/activity">back</a>
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
