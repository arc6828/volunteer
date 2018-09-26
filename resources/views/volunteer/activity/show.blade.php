@extends('monster-lite/layouts/theme')

@section('title','Activity')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/activity/{{ $id }}/edit" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-pencil"></i> Edit Activity
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

    			<div>
                    <div class="form-group">
	                    <div class="col-md-12 text-center">
                            <a href="{{ url('/') }}/activity/{{ $id }}/member/create" class="btn hidden-sm-down btn-success">
                            	<i class="fa fa-plus"></i> Register Activity
                            </a>
	                    </div>
	                </div>

					<div class="form-group">
	                    <label class="col-md-12">ActivityName : </label>
	                    <div class="col-md-12">
							{{ $row->activity_name }}
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Date Begin : </label>
	                    <div class="col-md-12">
							{{ $row->date_begin }}
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Date End : </label>
	                    <div class="col-md-12">
							{{ $row->date_end }}
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Time Begin : </label>
	                    <div class="col-md-12">
							{{ $row->time_begin }}
	                    </div>
	                </div>
					<div class="form-group">
	                    <label class="col-md-12">Time End : </label>
	                    <div class="col-md-12">
							{{ $row->time_end }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Place : </label>
	                    <div class="col-md-12">
							{{ $row->place }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Duration Hour : </label>
	                    <div class="col-md-12">
							{{ $row->duration_hour }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Semester ID : </label>
	                    <div class="col-md-12">
							{{ $row->semester_year }} / {{ $row->semester_no }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Activity Type ID : </label>
	                    <div class="col-md-12">
							{{ $row->activity_type_name }}
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-12">Major ID : </label>
	                    <div class="col-md-12">
							{{ $row->major_name }}
	                    </div>
	                </div>
	                <div class="form-group">
                        <div class="col-sm-12">
                        	<div class="pull-right">
								<a class="btn btn-outline-primary" href="{{ url('/') }}/activity">back</a>
                        	</div>
                        </div>
                    </div>
				</div>

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
