@extends('monster-lite/layouts/theme')

@section('title','Edit Semester')

@section('breadcrumb-menu')

@endsection

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="card">
		    <div class="card-block">
			    @forelse($table_semester as $row)
		    	<div class="row">
		    		<div class="col-md-9 align-self-center">
				        <h4 class="card-title">Item : {{ $row->semester_id }}</h4>
				        <h6 class="card-subtitle">Update new infomation in the form</h6>
		    		</div>
		    		<div class="col-md-3 align-self-center">
						<div class="dropdown pull-right">
							<button type="button" class="btn btn-secondary btn-circle btn-sm" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" style="border: none;"><i class="fa fa-ellipsis-v"></i> </button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
								<form id="form-delete" style="display: none;" action="{{ url('/') }}/activity/{{ $row->semester_id }}" method="POST">
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

    			<form class="form-material" action="{{ url('/') }}/semester/{{ $row->semester_id }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="form-group">
	                    <label class="col-md-12">ปีการศึกษา</label>
	                    <div class="col-md-12">
							<select name="semester_year" class="form-control" required>
                                <option value="" >None</option>
								@foreach($table_semester_year as $row_semester_year)
								<option value="{{ $row_semester_year }}" {{ $row_semester_year === $row->semester_year ? "selected":"" }}>
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
								<option value="{{ $row_semester_no }}"  {{ $row_semester_no === $row->semester_no ? "selected":"" }}>
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
								<option value="{{ $row_semester_type }}" {{ $row_semester_type === $row->semester_type ? "selected":"" }}>
									{{ $row_semester_type }}
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
					This semester id  does not exist
				</div>
				@endforelse
			</div>
		</div>
	</div>
</div>
@endsection
