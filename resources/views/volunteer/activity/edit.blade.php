@extends('monster-lite/layouts/theme')

@section('title','Edit activity')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/activity/{{ $id }}/member" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-plus"></i> Activity Member
</a>
@endsection

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-block">
			    @forelse($table_activity as $row)
		    	<div class="row">
		    		<div class="col-md-9 align-self-center">
				        <h4 class="card-title">Item : {{ $row->activity_id }}</h4>
				        <h6 class="card-subtitle">Update new infomation in the form</h6>
		    		</div>
		    		<div class="col-md-3 align-self-center">
						<div class="dropdown pull-right">
							<button type="button" class="btn btn-secondary btn-circle btn-sm" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" style="border: none;"><i class="fa fa-ellipsis-v"></i> </button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
								<form id="form-delete" style="display: none;" action="{{ url('/') }}/activity/{{ $row->activity_id }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<button class="btn btn-danger" type="submit">
										<i class="fa fa-trash-o"></i> Remove
									</button>
								</form>
								<a class="dropdown-item" href="javascript:document.getElementById('form-delete').submit();">
									<i class="fa fa-trash-o"></i> Remove
								</a>
							</div>
						</div>
		    		</div>
		    	</div>

    			<form class="form-material" action="{{ url('/') }}/activity/{{ $row->activity_id }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
	                    <label class="col-md-12">ActivityName : </label>
	                    <div class="col-md-12">
							<input type="text" name="activity_name" class="form-control form-control-line" value="{{ $row->activity_name }}" required>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Date Begin : </label>
	                    <div class="col-md-12">
							<input type="date" name="date_begin" class="form-control form-control-line"  value="{{ $row->date_begin }}" required>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Date End : </label>
	                    <div class="col-md-12">
							<input type="date" name="date_end" class="form-control form-control-line"  value="{{ $row->date_end }}" required>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Time Begin : </label>
	                    <div class="col-md-12">
							<input type="time" name="time_begin" class="form-control form-control-line"  value="{{ $row->time_begin }}" required>
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Time End : </label>
	                    <div class="col-md-12">
							<input type="time" name="time_end" class="form-control form-control-line"  value="{{ $row->time_end }}" required>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Place : </label>
	                    <div class="col-md-12">
							<input type="text" name="place" class="form-control form-control-line"  value="{{ $row->place }}" required>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Duration Hour : </label>
	                    <div class="col-md-12">
							<input type="number" name="duration_hour"  class="form-control form-control-line"  value="{{ $row->duration_hour }}" required>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Semester ID : </label>
	                    <div class="col-md-12">
							<select name="semester_id" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_semester as $row_semester)
								<option value="{{ $row_semester->semester_id }}" {{ $row_semester->semester_id === $row->semester_id ? "selected":"" }}>
									{{ $row_semester->semester_year }} / {{ $row_semester->semester_no }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Activity Type ID : </label>
	                    <div class="col-md-12">
							<select name="activity_type_id" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_activity_type as $row_activity_type)
								<option value="{{ $row_activity_type->activity_type_id }}" {{ $row_activity_type->activity_type_id === $row->activity_type_id ? "selected":"" }}>
									{{ $row_activity_type->activity_type_name }}
								</option>
								@endforeach
							</select>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Major ID : </label>
	                    <div class="col-md-12">
							<select name="major_id" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_major as $row_major)
								<option value="{{ $row_major->major_id }}" {{ $row_major->major_id === $row->major_id ? "selected":"" }}>
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
								<button class="btn btn-success" type="submit" >Update</button>
                        	</div>
                        </div>
                    </div>
				</form>

				@empty
				<div class="text-center">
					This activity id does not exist
				</div>
				@endforelse
			</div>
		</div>
	</div>
</div>
@endsection
